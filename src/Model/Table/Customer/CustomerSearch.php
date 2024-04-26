
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Customer;

class CustomerSearch {
    
    
    /**
     * 
     * @var int
     */
    public $customer_search_id;

    /**
     * 
     * @var int
     */
    public $store_id;

    /**
     * 
     * @var int
     */
    public $language_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var string
     */
    public $keyword;

    /**
     * 
     * @var int
     */
    public $category_id;

    /**
     * 
     * @var tinyint
     */
    public $sub_category;

    /**
     * 
     * @var tinyint
     */
    public $description;

    /**
     * 
     * @var int
     */
    public $products;

    /**
     * 
     * @var string
     */
    public $ip;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}