<?php
class Connect extends CI_Controller{
    
    protected $success = 'Successful';
    protected $failed = 'Sorry';
    protected $denied = 'Restricted';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Functions');
    }

    // Get Top Token Home
    public function get_top_token_home(){
        $query = $this->Functions->get_top_token();
        $val = array();
        $val['response']= "Success";
        $val['data'] = $query;
        echo json_encode($val);
    }

    // Get Token Detail
    public function get_token_detail(){
        if(isset($_POST['request'])){
            if($_POST['request'] == 'Sent'){
                $name = $_POST['name'];
                $query = $this->Functions->get_token_data($name);
                $val = array();
                $val = array('response'=> $this->success);
                $val['data'] = $query;
                echo json_encode($val);
            }
        }
        else {
            $response = array('response' => $this->denied);
            echo json_encode($response);
        }
    }
    //////////////////////////////////////
    public function get_token_data($name) {
        $query = $this->db
            ->select("top, token_name, curr_prc, cir_supp")
            ->from('tbl_token')
            ->like('token_name', $name)
            ->get();
        if($query->result() == NULL) {
            return NULL;
        }
        else {
            echo var_dump($query->result());
        }
    }

    // Insert Signup Data
    public function insert_signup_data() {
        if(isset($_POST['request'])){
            if($_POST['request'] == 'Sent'){
                $userdata['email'] = $_POST['email'];
                $userdata['password'] = $_POST['password'];
                $this->Functions->insert_data($userdata);
                $reply = array('response'=> $this->success);
                echo json_encode($reply);
            }
        }
        else {
            $response = array('response' => $this->denied);
            echo json_encode($response);
        }
    }

    // Get Login Data
    public function get_login_data() {
        if(isset($_POST['request'])) {
            if($_POST['request'] == 'Sent') {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $query = $this->Functions->get_data($email, $pass);

                if($query == NULL) {
                    $response = array('response' => 'Failed');
                    echo json_encode($response);
                }
                else {
                    $response = array('response' => 'Approved');
                    echo json_encode($response);
                }
            }
        }
        else {
            $response = array('response' => "access denied");
            echo json_encode($response);
        }
    }
}
