
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class Country {
    
    
    /**
     * 
     * @var int
     */
    public $country_id;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var string
     */
    public $iso_code_2;

    /**
     * 
     * @var string
     */
    public $iso_code_3;

    /**
     * 
     * @var string
     */
    public $address_format;

    /**
     * 
     * @var tinyint
     */
    public $postcode_required;

    /**
     * 
     * @var tinyint
     */
    public $status;
    
    
}