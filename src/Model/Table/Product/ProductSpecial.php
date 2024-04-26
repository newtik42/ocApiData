
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Product;

class ProductSpecial {
    
    
    /**
     * 
     * @var int
     */
    public $product_special_id;

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
    public $priority;

    /**
     * 
     * @var decimal
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