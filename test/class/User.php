
<?php

/* * ******************************************************* */
/* 	@copyright	NewTik 2020.					          */
/* 	@support	https://newtik-opencart.com/			  */
/* 	@license	LICENSE.txt								  */
/* * ******************************************************* */

namespace NewTik\ocApiData\Model\;

class User {
    
    
    /**
     * 
     * @var int
     */
    public $user_id;

    /**
     * 
     * @var int
     */
    public $user_group_id;

    /**
     * 
     * @var string
     */
    public $username;

    /**
     * 
     * @var string
     */
    public $password;

    /**
     * 
     * @var string
     */
    public $salt;

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
    public $image;

    /**
     * 
     * @var string
     */
    public $code;

    /**
     * 
     * @var string
     */
    public $ip;

    /**
     * 
     * @var tinyint
     */
    public $status;

    /**
     * 
     * @var datetime
     */
    public $date_added;
    
    
}