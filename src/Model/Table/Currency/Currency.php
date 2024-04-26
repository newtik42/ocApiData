
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Currency;

class Currency {
    
    
    /**
     * 
     * @var int
     */
    public $currency_id;

    /**
     * 
     * @var string
     */
    public $title;

    /**
     * 
     * @var string
     */
    public $code;

    /**
     * 
     * @var string
     */
    public $symbol_left;

    /**
     * 
     * @var string
     */
    public $symbol_right;

    /**
     * 
     * @var char
     */
    public $decimal_place;

    /**
     * 
     * @var double
     */
    public $value;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var datetime
     */
    public $date_modified;
    
    
}