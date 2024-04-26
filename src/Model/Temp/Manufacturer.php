<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020-.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Temp;

use NewTik\ocApiData\Model\Temp;

class Manufacturer extends Model {

    /**
     * 
     * @var int
     */
    public $manufacturer_id = 0;

    /**
     * 
     * @var string
     */
    public $name = '';

    /**
     * 
     * @var int
     */
    public $sort_order = 0;

    /**
     * 
     * @var string
     */
    public $image = '';

    /**
     * 
     * @var tinyint 0|1
     */
    public $noindex = 1;

    /**
     * 
     * @var 
     */
    public $product_related = [];

    /**
     * 
     * @var 
     */
    public $article_related = [];

    /**
     * 
     * @var 
     */
    public $manufacturer_description = [];

    /**
     * 
     * @var 
     */
    public $manufacturer_store = [0 => 0];
    public $manufacturer_seo_url = [];

    /**
     * 
     * @var 
     */
    public $manufacturer_layout = [0 => 1];

    /**
     * 
     * @var tinyint 0|1
     */
    public $status = 1;

    public function getDescriptions(int $language_id = 1): DescriptionCatalog {
        if (isset($this->manufacturer_description[$language_id])) {
            return $this->manufacturer_description[$language_id];
        } else {
            $this->manufacturer_description[$language_id] = new DescriptionCatalog();
            $this->manufacturer_description[$language_id]->language_id = $language_id;
            return $this->manufacturer_description[$language_id];
        }
    }

}
