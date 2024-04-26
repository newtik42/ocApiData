
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderRecurringTransaction {
    
    
    /**
     * 
     * @var int
     */
    public $order_recurring_transaction_id;

    /**
     * 
     * @var int
     */
    public $order_recurring_id;

    /**
     * 
     * @var string
     */
    public $reference;

    /**
     * 
     * @var string
     */
    public $type;

    /**
     * 
     * @var decimal
     */
    public $amount;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}