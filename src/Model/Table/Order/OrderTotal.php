
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderTotal {
    
    
    /**
     * 
     * @var int
     */
    public $order_total_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var string
     */
    public $code;

    /**
     * 
     * @var string
     */
    public $title;

    /**
     * 
     * @var decimal
     */
    public $value;

    /**
     * 
     * @var int
     */
    public $sort_order;
    
    
}