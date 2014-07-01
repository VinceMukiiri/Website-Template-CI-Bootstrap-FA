<?php

class Admin_Model extends MY_Model {

    const DB_TABLE = 'admins';
    const DB_TABLE_PK = 'admin_id';
    /**
     * Admin unique identifier
     * @var int 
     */
    public $admin_id;
    
    /**
     * Admin username (used in login)
     * @var string 
     */
    public $username;
    
    /**
     * Encrypted admin password (md5 encryption)
     * @var string
     */
    public $hashed_password;
    
    /**
     * Admin email (for use when admin forgets password and needs reset)
     * @var string
     */
    public $email;
    
    function __construct() {
        parent::__construct();
        
    }
    
}

