
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Customer;

class CustomerActivity {
    
    
    /**
     * 
     * @var int
     */
    public $customer_activity_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var string
     */
    public $key;

    /**
     * 
     * @var string
     */
    public $data;

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