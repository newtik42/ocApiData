
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderRecurring {
    
    
    /**
     * 
     * @var int
     */
    public $order_recurring_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var string
     */
    public $reference;

    /**
     * 
     * @var int
     */
    public $product_id;

    /**
     * 
     * @var string
     */
    public $product_name;

    /**
     * 
     * @var int
     */
    public $product_quantity;

    /**
     * 
     * @var int
     */
    public $recurring_id;

    /**
     * 
     * @var string
     */
    public $recurring_name;

    /**
     * 
     * @var string
     */
    public $recurring_description;

    /**
     * 
     * @var string
     */
    public $recurring_frequency;

    /**
     * 
     * @var smallint
     */
    public $recurring_cycle;

    /**
     * 
     * @var smallint
     */
    public $recurring_duration;

    /**
     * 
     * @var decimal
     */
    public $recurring_price;

    /**
     * 
     * @var tinyint
     */
    public $trial;

    /**
     * 
     * @var string
     */
    public $trial_frequency;

    /**
     * 
     * @var smallint
     */
    public $trial_cycle;

    /**
     * 
     * @var smallint
     */
    public $trial_duration;

    /**
     * 
     * @var decimal
     */
    public $trial_price;

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
    
    
}