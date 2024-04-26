
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Product;

class ProductOptionValue {
    
    
    /**
     * 
     * @var int
     */
    public $product_option_value_id;

    /**
     * 
     * @var int
     */
    public $product_option_id;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var int
     */
    public $option_id;

    /**
     * 
     * @var int
     */
    public $option_value_id;

    /**
     * 
     * @var int
     */
    public $quantity;

    /**
     * 
     * @var tinyint
     */
    public $subtract;

    /**
     * 
     * @var decimal
     */
    public $price;

    /**
     * 
     * @var string
     */
    public $price_prefix;

    /**
     * 
     * @var int
     */
    public $points;

    /**
     * 
     * @var string
     */
    public $points_prefix;

    /**
     * 
     * @var decimal
     */
    public $weight;

    /**
     * 
     * @var string
     */
    public $weight_prefix;
    
    
}