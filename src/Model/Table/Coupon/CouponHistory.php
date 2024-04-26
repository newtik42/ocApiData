
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Coupon;

class CouponHistory {
    
    
    /**
     * 
     * @var int
     */
    public $coupon_history_id;

    /**
     * 
     * @var int
     */
    public $coupon_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $customer_id;

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