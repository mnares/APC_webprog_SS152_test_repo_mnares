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
    

    function find($id) //this is for find record id->product
    { 
        $code = $this->db->where('user_id',$id)
                        ->limit(1)
                        ->get('users');
        if ($code->num_rows() > 0 )
        {
            return $code->row();
        }else {
            return array();
        }//end if code->num_rows > 0 
                
    }//end function find

    //delete
    function delete($id)
    {
        return $this->db->where('user_id',$id)
                ->delete('users');
    }
}?>