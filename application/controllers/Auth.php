<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Load the model needed
        $this->load->model('User_model', 'userdb');
        // Load the helpers needed
        $this->load->helper(array('form','string','url'));
        // Load the libraries needed
        $this->load->library(array('email', 'form_validation', 'pagination', 'upload', 'session'));
    }
    public function index(){
        if($this->session->userdata('auth') == 'TRUE'){
            $this->session->keep_flashdata(array('email', 'auth'));
            $data['title'] = "Signup";
            // Load view file        
            $this->load->view('include/header', $data);
            $this->load->view('user/auth_view');
            //$this->load->view('include/footer');
        }else{
            redirect('Signup');
        }
    }
    // Signup Validation Function
    public function auth_validation(){        
        $required = "This field must not be empty";

        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]|max_length[20]|alpha_numeric|is_unique[user_table.user_username]', array(
            'required' => $required,
            'min_length' => 'Must contain at least 6 characters',
            'max_length' => 'Must not exceed to 20 characters',
            'alpha_numeric' => 'Must only contain alpha-numeric characters',
            'is_unique' => 'That username is taken. Try another.'
        ));

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric', array(
            'required' => $required,
            'min_length' => 'Must contain at least 8 characters',
            'max_length' => 'Must not exceed to 20 characters',
            'alpha_numeric' => 'Must only contain alpha-numeric characters'
        ));
        
        // Form Validation
        if (!$this->form_validation->run()) {
            $this->index();            
        } else {
            $username = $this->input->post('username');
            $email = $this->session->userdata('email');
            $password = md5($this->input->post('password'));
            // Get data
            $data['user_username'] = $username;
            $data['user_email'] = $email;
            $data['user_password'] = $password;
            $data['user_status'] = 'USER';
            $this->userdb->create_user($data);
            $session_login = array(
                'login_username' => $username,
                'login_email' => $email,
                'login_password' => $password,
                'login_status' => 'USER',             
            );
            $this->session->set_userdata($session_login);  
            redirect('Home');
        }        
    }
}
?>