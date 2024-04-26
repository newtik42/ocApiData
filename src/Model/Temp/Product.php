<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Temp;

use NewTik\ocApiData\Model\Temp;

class Product extends Model {

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var string
     */
    public $model = '';

    /**
     * 
     * @var string
     */
    public $sku = '';

    /**
     * 
     * @var string
     */
    public $upc = '';

    /**
     * 
     * @var string
     */
    public $ean = '';

    /**
     * 
     * @var string
     */
    public $jan = '';

    /**
     * 
     * @var string
     */
    public $isbn = '';

    /**
     * 
     * @var string
     */
    public $mpn = '';

    /**
     * 
     * @var string
     */
    public $location = '';

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
    
    public $product_store = [0 => 0];
    public $product_category = [];
    public $product_filters = [];
    public $product_attribute = [];
    public $product_options = [];
    public $option_values = [];
    public $product_discounts = [];
    public $product_specials = [];
    public $product_image = [];
    public $product_downloads = [];
    public $product_relateds = [];
    public $product_reward = [];
    public $product_description = [];
    public $product_seo_url = [];
    public $product_layout = [];
    public $main_category_id = 0;

    public function __construct() {
        //$this->product_layout = [$this->config->get('config_layout_id')];
    }

    public function getDescriptions(int $language_id = 1): ProductDescriptions {
        if (isset($this->product_description[$language_id])) {
            return $this->product_description[$language_id];
        } else {
            $this->product_description[$language_id] = new ProductDescriptions();
            $this->product_description[$language_id]->language_id = $language_id;
            return $this->product_description[$language_id];
        }
    }

    public function getAttrinutes(int $attribute_id): ProductAttribute {
        if (isset($this->product_attribute[$attribute_id])) {
            return $this->product_attribute[$attribute_id];
        } else {
            $this->product_attribute[$attribute_id] = new ProductAttribute();
            $this->product_attribute[$attribute_id]->attribute_id = $attribute_id;
            return $this->product_attribute[$attribute_id];
        }
    }

}

class ProductDescriptions extends Model {

    /**
     * 
     * @var int
     */
    public $language_id = 1;

    /**
     * 
     * @var string
     */
    public $name = '';

    /**
     * 
     * @var string
     */
    public $description = '';
    
    /**
     * 
     * @var string
     */
    public $meta_h1 = '';
    /**
     * 
     * @var string
     */
    public $meta_title = '';

    /**
     * 
     * @var string
     */
    public $meta_description = '';

    /**
     * 
     * @var string
     */
    public $meta_keyword = '';

    /**
     * 
     * @var string
     */
    public $tag = '';

}

class ProductAttribute extends Model {

    /**
     * 
     * @var int
     */
    public $attribute_id;
    public $product_attribute_description = [];

    public function __construct() {
        
    }

    public function getDescription($language_id = 1): ProductAttributeDescription {

        if (isset($this->product_attribute_description[$language_id])) {
            return $this->product_attribute_description[$language_id];
        } else {
            $this->product_attribute_description[$language_id] = new ProductAttributeDescription();
            return $this->product_attribute_description[$language_id];
        }
    }

    public function addDescription() {
        
    }

}

class ProductAttributeDescription extends Model {

    /**
     * 
     * @var int
     */
    public $language_id = 1;

    /**
     * 
     * @var string
     */
    public $text = '';

}
