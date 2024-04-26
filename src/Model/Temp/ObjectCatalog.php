<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020-.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Temp;



class ObjectCatalog extends \NewTik\ocApiData\Model\Temp\Model{

    /**
     * 
     * @var string
     */
    public $description = '';
    
    /**
     * 
     * @var tinyint 0|1
     */
    public $status = 1; 
    
    /**
     * 
     * @var DateTime 2022-07-11 17:37:11.000
     */
    public $date_modified;
    
    /**
     * 
     * @var DateTime 2022-07-11 17:37:11.000
     */
    public $date_added;
    
    /**
     * 
     * @var int
     */
    public $sort_order = 0;    
    
    /**
     * 
     * @var type
     */
    public $_store = [0 => 0];    
    
    /**
     * 
     * @var type
     */
    public $_seo_url = [];
    
    /**
     * 
     * @var type
     */
    public $_layout = []; 
    
    /**
     * 
     * @var type
     */
    public $_description = [];
}
