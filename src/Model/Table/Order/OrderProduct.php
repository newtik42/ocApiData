
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderProduct {
    
    
    /**
     * 
     * @var int
     */
    public $order_product_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var string
     */
    public $model;

    /**
     * 
     * @var int
     */
    public $quantity;

    /**
     * 
     * @var decimal
     */
    public $price;

    /**
     * 
     * @var decimal
     */
    public $total;

    /**
     * 
     * @var decimal
     */
    public $tax;

    /**
     * 
     * @var int
     */
    public $reward;
    
    
}