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

    //retrieve
    function all_users()
    {
        $show = $this->db->get('users');
            if($show->num_rows() > 0 ) {
                    return $show->result();
            } else {
                     return array();
            } //end if num_rows
    }
    
    //update
    function edit($id, $data_users)
    {
        return $this->db->where('user_id',$id)
                ->update('users',$data_users);
    }
    
}?>