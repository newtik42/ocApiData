
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Article;

class Article {
    
    
    /**
     * 
     * @var int
     */
    public $article_id;

    /**
     * 
     * @var string
     */
    public $image;

    /**
     * 
     * @var date
     */
    public $date_available;

    /**
     * 
     * @var int
     */
    public $sort_order;

    /**
     * 
     * @var tinyint
     */
    public $article_review;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var tinyint
     */
    public $noindex;

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
     * @var int
     */
    public $viewed;

    /**
     * 
     * @var int
     */
    public $gstatus;
    
    
}