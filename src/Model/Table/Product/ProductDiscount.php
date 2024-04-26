
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Product;

class ProductDiscount {
    
    
    /**
     * 
     * @var int
     */
    public $product_discount_id;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var int
     */
    public $customer_group_id;

    /**
     * 
     * @var int
     */
    public $quantity;

    /**
     * 
     * @var int
     */
    public $priority;

    /**
     * 
     * @var float
     */
    public $price;

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
    
    
}