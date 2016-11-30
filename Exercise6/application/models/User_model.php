<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    // create
    function insert_user($data_users)
    {
        return $this->db->insert('users', $data_users);
    }
    
}?>