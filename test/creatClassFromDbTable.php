<?php
$textTempClass = '
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class __className__ {
    
    __publics__
    
    
}';
include_once '/media/newtik/Elements/stas/works/projects/OpenCart/assembly/sourse/3.x/system/library/db/mpdo.php';

$db = new DB\mPDO('127.0.0.1', 'root', '123456', 'oc_3.0.3.7');

$rows = $db->query("select TABLE_NAME from information_schema.columns  where "
                . "TABLE_SCHEMA = 'oc_3.0.3.7' GROUP BY TABLE_NAME")->rows;

foreach ($rows as $row) {

    $className = $row['TABLE_NAME'];

    $className = str_replace("oc_", "", $className);

    $className = str_replace("_", " ", $className);

    $className = ucwords($className);

    $className = str_replace(" ", "", $className);

    $columns = $db->query("select * from information_schema.columns  where "
                    . "TABLE_SCHEMA = 'oc_3.0.3.7' and TABLE_NAME = '" . $row['TABLE_NAME'] . "'")->rows;

    $columns_ = [];
    foreach ($columns as $column) {

        $column['DATA_TYPE'] = str_replace(['varchar', 'text'], "string", $column['DATA_TYPE']);

        $columns_[] = '
    /**
     * 
     * @var ' . $column['DATA_TYPE'] . '
     */
    public $' . $column['COLUMN_NAME'] . ';';
    }

    
    $publics = implode(PHP_EOL, $columns_);
    
    $newTextClass = str_replace(['__className__', '__publics__'], [$className, $publics], $textTempClass);
    
    file_put_contents(__DIR__ . "/class/" . $className . '.php', $newTextClass);
    
}



