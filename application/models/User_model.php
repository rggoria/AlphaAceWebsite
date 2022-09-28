<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }
    // Add User Function
    public function create_user($data) {        
        // Create new data to the database
        $this->db->insert('user_table', $data);
    }
    // Login Verification Function
    public function login_verification($login, $password) {
        $this->db->select('
                    user_table.user_id,
                    user_table.user_username,
                    user_table.user_email,
                    user_table.user_password,
                    user_table.user_status')
                ->from('user_table')
                ->where("(user_table.user_email = '$login' OR user_table.user_username = '$login')")
                ->where('user_password', $password);
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->row();
        }else{
            return FALSE;
        }
    }
}
?>