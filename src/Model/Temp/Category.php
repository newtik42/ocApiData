<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020-.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Temp;

use NewTik\ocApiData\Model\Temp;

class Category extends Model {
    
    /**
     * 
     * @var int
     */
    public $category_id = 0;
        
    /**
     * 
     * @var int
     */
    public $parent_id = 0;
        
    /**
     * 
     * @var int
     */
    public $top = 1;    
    
    /**
     * 
     * @var int
     */
    public $column = 0;   
    
    /**
     * 
     * @var tinyint 0|1
     */
    public $status = 1; 
    
    /**
     * 
     * @var int
     */
    public $sort_order = 0;
    
    /**
     * 
     * @var DateTime 2022-07-11 17:37:11.000
     */
    public $date_modified;
    
    /**
     * 
     * @var DateTime 2022-07-11 17:37:11.000
     */
    public $date_added;
    
    /**
     * 
     * @var type
     */
    public $category_description = [];
    
    /**
     * 
     * @var type
     */
    public $category_filter = [];
    
    /**
     * 
     * @var type
     */
    public $category_store = [0 => 0];
    
    /**
     * 
     * @var type
     */
    public $category_seo_url = [];
    
    /**
     * 
     * @var type
     */
    public $category_layout = [];    
    
    /**
     * 
     * @var tinyint 0|1
     */
    public $noindex = 1;
    
    
    public function getDescriptions(int $language_id = 1): Descriptions {
        
        if (isset($this->category_description[$language_id])) {
            return $this->category_description[$language_id];
        } else {
            $this->category_description[$language_id] = new Descriptions();
            $this->category_description[$language_id]->language_id = $language_id;
            return $this->category_description[$language_id];
        }
        
    }
    
    
}

class Descriptions extends Model{
    
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
    public $meta_h1 = '';
    
    /**
     * 
     * @var string
     */
    public $meta_keyword = '';
    
}


