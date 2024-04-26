
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\Table\Order;

class Order {
    
    
    /**
     * 
     * @var int
     */
    public $order_id;

    /**
     * 
     * @var int
     */
    public $invoice_no;

    /**
     * 
     * @var string
     */
    public $invoice_prefix;

    /**
     * 
     * @var int
     */
    public $store_id;

    /**
     * 
     * @var string
     */
    public $store_name;

    /**
     * 
     * @var string
     */
    public $store_url;

    /**
     * 
     * @var int
     */
    public $customer_id;

    /**
     * 
     * @var int
     */
    public $customer_group_id;

    /**
     * 
     * @var string
     */
    public $firstname;

    /**
     * 
     * @var string
     */
    public $lastname;

    /**
     * 
     * @var string
     */
    public $email;

    /**
     * 
     * @var string
     */
    public $telephone;

    /**
     * 
     * @var string
     */
    public $fax;

    /**
     * 
     * @var string
     */
    public $custom_field;

    /**
     * 
     * @var string
     */
    public $payment_firstname;

    /**
     * 
     * @var string
     */
    public $payment_lastname;

    /**
     * 
     * @var string
     */
    public $payment_company;

    /**
     * 
     * @var string
     */
    public $payment_address_1;

    /**
     * 
     * @var string
     */
    public $payment_address_2;

    /**
     * 
     * @var string
     */
    public $payment_city;

    /**
     * 
     * @var string
     */
    public $payment_postcode;

    /**
     * 
     * @var string
     */
    public $payment_country;

    /**
     * 
     * @var int
     */
    public $payment_country_id;

    /**
     * 
     * @var string
     */
    public $payment_zone;

    /**
     * 
     * @var int
     */
    public $payment_zone_id;

    /**
     * 
     * @var string
     */
    public $payment_address_format;

    /**
     * 
     * @var string
     */
    public $payment_custom_field;

    /**
     * 
     * @var string
     */
    public $payment_method;

    /**
     * 
     * @var string
     */
    public $payment_code;

    /**
     * 
     * @var string
     */
    public $shipping_firstname;

    /**
     * 
     * @var string
     */
    public $shipping_lastname;

    /**
     * 
     * @var string
     */
    public $shipping_company;

    /**
     * 
     * @var string
     */
    public $shipping_address_1;

    /**
     * 
     * @var string
     */
    public $shipping_address_2;

    /**
     * 
     * @var string
     */
    public $shipping_city;

    /**
     * 
     * @var string
     */
    public $shipping_postcode;

    /**
     * 
     * @var string
     */
    public $shipping_country;

    /**
     * 
     * @var int
     */
    public $shipping_country_id;

    /**
     * 
     * @var string
     */
    public $shipping_zone;

    /**
     * 
     * @var int
     */
    public $shipping_zone_id;

    /**
     * 
     * @var string
     */
    public $shipping_address_format;

    /**
     * 
     * @var string
     */
    public $shipping_custom_field;

    /**
     * 
     * @var string
     */
    public $shipping_method;

    /**
     * 
     * @var string
     */
    public $shipping_code;

    /**
     * 
     * @var string
     */
    public $comment;

    /**
     * 
     * @var decimal
     */
    public $total;

    /**
     * 
     * @var int
     */
    public $order_status_id;

    /**
     * 
     * @var int
     */
    public $affiliate_id;

    /**
     * 
     * @var decimal
     */
    public $commission;

    /**
     * 
     * @var int
     */
    public $marketing_id;

    /**
     * 
     * @var string
     */
    public $tracking;

    /**
     * 
     * @var int
     */
    public $language_id;

    /**
     * 
     * @var int
     */
    public $currency_id;

    /**
     * 
     * @var string
     */
    public $currency_code;

    /**
     * 
     * @var decimal
     */
    public $currency_value;

    /**
     * 
     * @var string
     */
    public $ip;

    /**
     * 
     * @var string
     */
    public $forwarded_ip;

    /**
     * 
     * @var string
     */
    public $user_agent;

    /**
     * 
     * @var string
     */
    public $accept_language;

    /**
     * 
     * @var datetime
     */
    public $date_added;

    /**
     * 
     * @var datetime
     */
    public $date_modified;
    
    
}