
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class Cart {
    
    
    /**
     * 
     * @var int
     */
    public $cart_id;

    /**
     * 
     * @var int
     */
    public $api_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var string
     */
    public $session_id;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var int
     */
    public $recurring_id;

    /**
     * 
     * @var string
     */
    public $option;

    /**
     * 
     * @var int
     */
    public $quantity;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}