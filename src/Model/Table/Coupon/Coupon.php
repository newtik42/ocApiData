
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Coupon;

class Coupon {
    
    
    /**
     * 
     * @var int
     */
    public $coupon_id;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var string
     */
    public $code;

    /**
     * 
     * @var char
     */
    public $type;

    /**
     * 
     * @var decimal
     */
    public $discount;

    /**
     * 
     * @var tinyint
     */
    public $logged;

    /**
     * 
     * @var tinyint
     */
    public $shipping;

    /**
     * 
     * @var decimal
     */
    public $total;

    /**
     * 
     * @var date
     */
    public $date_start;

    /**
     * 
     * @var date
     */
    public $date_end;

    /**
     * 
     * @var int
     */
    public $uses_total;

    /**
     * 
     * @var string
     */
    public $uses_customer;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}