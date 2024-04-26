
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderVoucher {
    
    
    /**
     * 
     * @var int
     */
    public $order_voucher_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $voucher_id;

    /**
     * 
     * @var string
     */
    public $description;

    /**
     * 
     * @var string
     */
    public $code;

    /**
     * 
     * @var string
     */
    public $from_name;

    /**
     * 
     * @var string
     */
    public $from_email;

    /**
     * 
     * @var string
     */
    public $to_name;

    /**
     * 
     * @var string
     */
    public $to_email;

    /**
     * 
     * @var int
     */
    public $voucher_theme_id;

    /**
     * 
     * @var string
     */
    public $message;

    /**
     * 
     * @var decimal
     */
    public $amount;
    
    
}