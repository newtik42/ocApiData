<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020-.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Temp;

use NewTik\ocApiData\Model\Temp;

class Attribute extends Model {    
    
    /**
     * 
     * @var int
     */
    public $attribute_id;
    
    /**
     * 
     * @var int
     */
    public $attribute_group_id;
    
    /**
     * 
     * @var int
     */
    public $sort_order = 0;
    
    
    /**
     * 
     * @var 
     */
    public $attribute_description = [];
    
    public function getDescriptions(int $language_id = 1): Descriptions {
        if (isset($this->attribute_description[$language_id])) {
            return $this->attribute_description[$language_id];
        } else {
            $this->attribute_description[$language_id] = new Descriptions();
            $this->attribute_description[$language_id]->language_id = $language_id;
            return $this->attribute_description[$language_id];
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
    
    
}


