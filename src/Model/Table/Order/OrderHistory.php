
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderHistory {
    
    
    /**
     * 
     * @var int
     */
    public $order_history_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $order_status_id;

    /**
     * 
     * @var tinyint
     */
    public $notify;

    /**
     * 
     * @var string
     */
    public $comment;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}