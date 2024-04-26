
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class Review {
    
    
    /**
     * 
     * @var int
     */
    public $review_id;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var string
     */
    public $author;

    /**
     * 
     * @var string
     */
    public $text;

    /**
     * 
     * @var int
     */
    public $rating;

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
    
    
}