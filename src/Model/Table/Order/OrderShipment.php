
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class OrderShipment {
    
    
    /**
     * 
     * @var int
     */
    public $order_shipment_id;

    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var datetime
     */
    public $date_added;

    /**
     * 
     * @var string
     */
    public $shipping_courier_id;

    /**
     * 
     * @var string
     */
    public $tracking_number;
    
    
}