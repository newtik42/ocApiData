
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class ReturnHistory {
    
    
    /**
     * 
     * @var int
     */
    public $return_history_id;

    /**
     * 
     * @var int
     */
    public $return_id;

    /**
     * 
     * @var int
     */
    public $return_status_id;

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