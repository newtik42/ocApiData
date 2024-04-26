
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Product;

class Product {
    
    
    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var string
     */
    public $model;

    /**
     * 
     * @var string
     */
    public $sku;

    /**
     * 
     * @var string
     */
    public $upc;

    /**
     * 
     * @var string
     */
    public $ean;

    /**
     * 
     * @var string
     */
    public $jan;

    /**
     * 
     * @var string
     */
    public $isbn;

    /**
     * 
     * @var string
     */
    public $mpn;

    /**
     * 
     * @var string
     */
    public $location;

    /**
     * 
     * @var int
     */
    public $quantity = 9999;

    /**
     * 
     * @var int
     */
    public $stock_status_id;

    /**
     * 
     * @var string
     */
    public $image = '';

    /**
     * 
     * @var int
     */
    public $manufacturer_id;

    /**
     * 
     * @var tinyint 0|1
     */
    public $shipping = 1;

    /**
     * 
     * @var decimal
     */
    public $price = 1;

    /**
     * 
     * @var int
     */
    public $points;

    /**
     * 
     * @var int
     */
    public $tax_class_id;

    /**
     * 
     * @var date
     */
    public $date_available;

    /**
     * 
     * @var decimal
     */
    public $weight;

    /**
     * 
     * @var int
     */
    public $weight_class_id;

    /**
     * 
     * @var decimal
     */
    public $length;

    /**
     * 
     * @var decimal
     */
    public $width;

    /**
     * 
     * @var decimal
     */
    public $height;

    /**
     * 
     * @var int
     */
    public $length_class_id;

    /**
     * 
     * @var tinyint 0|1
     */
    public $subtract = 1;

    /**
     * 
     * @var int
     */
    public $minimum;

    /**
     * 
     * @var int
     */
    public $sort_order = 1;

    /**
     * 
     * @var tinyint 0|1
     */
    public $status = 1;

    /**
     * 
     * @var int
     */
    public $viewed = 0;

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

    /**
     * 
     * @var tinyint 0|1
     */
    public $noindex = 1;
    
    
}