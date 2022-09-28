<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Load the helpers needed
        $this->load->helper(array('form','url'));
        // Load the libraries needed
        $this->load->library(array('form_validation', 'pagination', 'upload', 'session'));
    }
    public function index(){
        $data['title'] = "Home";
        // Load view file        
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/homepage_view');
        $this->load->view('include/footer');
    }
    // Whitepaper Function
    public function whitepaper($token){
        $data['title'] = "Token Overview: $token";
        $token_data['token'] = $token;
        // Load view file
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/overview_view', $token_data);
        $this->load->view('homepage/whitepaper_view', $token_data);
        $this->load->view('include/footer');
    }
    // Social Tab Function
    public function social_tab($token){
        $data['title'] = "Token Overview: $token";
        $token_data['token'] = $token;
        // Load view file
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/overview_view', $token_data);
        $this->load->view('homepage/social_tab_view', $token_data);
        $this->load->view('include/footer');
    }
    // Social Analysis Function
    public function social_analysis($token){
        $data['title'] = "Token Overview: $token";
        $token_data['token'] = $token;
        // Load view file
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/overview_view', $token_data);
        $this->load->view('homepage/social_analysis_view', $token_data);
        $this->load->view('include/footer');
    }
    // Red Flag Function
    public function redflag($token){
        $data['title'] = "Token Overview: $token";
        $token_data['token'] = $token;
        // Load view file
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/overview_view', $token_data);
        $this->load->view('homepage/redflag_view', $token_data);
        $this->load->view('include/footer');
    }
    // Analysis Report Function
    public function analysis($token){
        $data['title'] = "Token Overview: $token";
        $token_data['token'] = $token;
        // Load view file
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('homepage/overview_view', $token_data);
        $this->load->view('homepage/analysis_view', $token_data);
        $this->load->view('include/footer');
    }
}
?>