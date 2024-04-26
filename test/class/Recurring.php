
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class Recurring {
    
    
    /**
     * 
     * @var int
     */
    public $recurring_id;

    /**
     * 
     * @var decimal
     */
    public $price;

    /**
     * 
     * @var enum
     */
    public $frequency;

    /**
     * 
     * @var int
     */
    public $duration;

    /**
     * 
     * @var int
     */
    public $cycle;

    /**
     * 
     * @var tinyint
     */
    public $trial_status;

    /**
     * 
     * @var decimal
     */
    public $trial_price;

    /**
     * 
     * @var enum
     */
    public $trial_frequency;

    /**
     * 
     * @var int
     */
    public $trial_duration;

    /**
     * 
     * @var int
     */
    public $trial_cycle;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var int
     */
    public $sort_order;
    
    
}