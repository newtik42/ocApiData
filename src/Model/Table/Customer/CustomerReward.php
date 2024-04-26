
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Customer;

class CustomerReward {
    
    
    /**
     * 
     * @var int
     */
    public $customer_reward_id;

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
     * @var int
     */
    public $points;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}