
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Customer;

class CustomerTransaction {
    
    
    /**
     * 
     * @var int
     */
    public $customer_transaction_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var string
     */
    public $description;

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