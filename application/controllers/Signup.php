<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup extends CI_Controller {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Load the model needed
        $this->load->model('User_model', 'userdb');
        // Load the helpers needed
        $this->load->helper(array('form','string','url'));
        // Load the libraries needed
        $this->load->library(array('email', 'form_validation', 'pagination', 'session'));
    }
    public function index(){
        $data['title'] = "Signup";
        // Load view file        
        $this->load->view('include/header', $data);
        $this->load->view('user/signup_view');
        //$this->load->view('include/footer');
    }
    // Signup Register Function
    public function signup_register(){
        $required = "This field must not be empty";
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user_table.user_email]', array(
            'required' => $required,
            'valid_email' => 'Invalid email format',
            'is_unique' => 'Email has already taken. Try another.'
        ));
        // Form Validation
        if (!$this->form_validation->run()){
            $this->index();            
        }else{
            $email = $this->input->post('email');
            $code = random_string('numeric', 4);
            // Email config
            $config_email = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => $this->config->item('email'),
                'smtp_pass' => $this->config->item('password'),
                'smtp_crypto' => 'ssl',
                'mailtype' => 'html',
                'smtp_timeout' => '4',
                'charset' => 'iso-8859-1',
                'newline' => "\r\n",
                'wordwrap' => TRUE
            );
            $this->email->initialize($config_email);
            $this->email->from('noreply@email.com', 'Alpha Ace');
            $this->email->to($email);            
            $this->email->subject('Verify Email Address');

            $message = '<body style="background-color:#0080FF80;">';
            $message .= '<center><div class="navbar" style="background-color:#050038; overflow: hidden;"><img src="https://i.imgur.com/lsxEtnQ.png" style="width:105px; height: 100px;"></div></center>';
            $message .= '<center><h3>Alpha Ace Mods Verification</h3></center>';
            $message .= '<h3>You have entered your email at Alpha Ace Mods to register a new account. So we can get you started, please enter the code below on the signup page:</h3>';
            $message .= '<center><h1>'. $code .'</h1></center>';
            $message .= '<h3>We look forward to you joining our community!</p>';
            $message .= '<h3>If you did not attempt to register an account, please ignore this email.</p>';
            
            $this->email->message($message);
            
            if ($this->email->send()){
                $session_register = array(                                      
                    'code' => $code,
                    'email' => $email
                );
                $this->session->set_flashdata($session_register);                
                redirect('Signup/verify');
            }else{
                echo $this->email->print_debugger();
            }
        }
    }
    // Signup Verify Function
    public function verify(){
        $this->session->keep_flashdata(array('email', 'code'));
        $data['title'] = "Signup";
        // Load view file        
        $this->load->view('include/header', $data);
        $this->load->view('user/verify_view');
        //$this->load->view('include/footer');
    }
    // Signup Register Function
    public function verify_code(){
        $required = "This field must not be empty";
        $this->form_validation->set_rules('code', 'Code', 'required|numeric|callback_code_check', array(
            'required' => $required,
            'numeric' => 'Numeric input only',
            'code_check' => 'Code does not match!'
        ));
        // Form Validation
        if (!$this->form_validation->run()){
            $this->verify();            
        }else{
            $session_verify = array(
                'email' => $this->session->userdata('email'),
                'auth' => 'TRUE'
            );
            $this->session->set_flashdata($session_verify);  
            redirect('Auth');
        }
    }
    // Confirm Current Password Function
    public function code_check($str) {
        $str = $this->input->post('code');
        $code = $this->session->userdata('code');
        if ($str == $code)
            return TRUE;
        return FALSE;
    }
    // Signup Resend Function
    public function resend(){
        $this->session->keep_flashdata(array('email', 'code'));
        // Email config
        $config_email = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => $this->config->item('email'),
            'smtp_pass' => $this->config->item('password'),
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'smtp_timeout' => '4',
            'charset' => 'iso-8859-1',
            'newline' => "\r\n",
            'wordwrap' => TRUE
        );
        $this->email->initialize($config_email);
        
        $this->email->from('noreply@email.com', 'Alpha Ace');
        $this->email->to($this->session->userdata('email'));            
        $this->email->subject('Verify Email Address');

        $message = '<body style="background-color:#0080FF80;">';
        $message .= '<center><div class="navbar" style="background-color:#050038; overflow: hidden;"><img src="https://i.imgur.com/lsxEtnQ.png" style="width:105px; height: 100px;"></div></center>';
        $message .= '<center><h3>Alpha Ace Mods Verification</h3></center>';
        $message .= '<h3>You have entered your email at Alpha Ace Mods to register a new account. So we can get you started, please enter the code below on the signup page:</h3>';
        $message .= '<center><h1>'. $this->session->userdata('code') .'</h1></center>';
        $message .= '<h3>We look forward to you joining our community!</p>';
        $message .= '<h3>If you did not attempt to register an account, please ignore this email.</p>';
        
        $this->email->message($message);
        
        if ($this->email->send()){
            redirect('Signup/verify');
        }else{
            echo $this->email->print_debugger();
        }
    }
}
?>