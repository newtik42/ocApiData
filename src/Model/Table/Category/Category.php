
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Category;

class Category {
    
    
    /**
     * 
     * @var int
     */
    public $category_id;

    /**
     * 
     * @var string
     */
    public $image;

    /**
     * 
     * @var int
     */
    public $parent_id;

    /**
     * 
     * @var tinyint
     */
    public $top;

    /**
     * 
     * @var int
     */
    public $column;

    /**
     * 
     * @var int
     */
    public $sort_order;

    /**
     * 
     * @var tinyint
     */
    public $status;

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
     * @var tinyint
     */
    public $noindex;
    
    
}