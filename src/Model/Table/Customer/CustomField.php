
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Customer;

class CustomField {
    
    
    /**
     * 
     * @var int
     */
    public $custom_field_id;

    /**
     * 
     * @var string
     */
    public $type;

    /**
     * 
     * @var string
     */
    public $value;

    /**
     * 
     * @var string
     */
    public $validation;

    /**
     * 
     * @var string
     */
    public $location;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var int
     */
    public $sort_order;
    
    
}