
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class TaxRate {
    
    
    /**
     * 
     * @var int
     */
    public $tax_rate_id;

    /**
     * 
     * @var int
     */
    public $geo_zone_id;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var decimal
     */
    public $rate;

    /**
     * 
     * @var char
     */
    public $type;

    /**
     * 
     * @var datetime
     */
    public $date_added;

    /**
     * 
     * @var datetime
     */
    public $date_modified;
    
    
}