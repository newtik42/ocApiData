
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderOption {
    
    
    /**
     * 
     * @var int
     */
    public $order_option_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $order_product_id;

    /**
     * 
     * @var int
     */
    public $product_option_id;

    /**
     * 
     * @var int
     */
    public $product_option_value_id;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var string
     */
    public $value;

    /**
     * 
     * @var string
     */
    public $type;
    
    
}