
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class VoucherHistory {
    
    
    /**
     * 
     * @var int
     */
    public $voucher_history_id;

    /**
     * 
     * @var int
     */
    public $voucher_id;

    /**
     * 
     * @var int
     */
    public $order_id;

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