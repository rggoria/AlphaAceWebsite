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

    public function req_mob()
    {
        if(isset($_POST['request']))
        {
            if($_POST['request'] == 'Sent')
            {
                $userdata['email'] = $_POST['email'];
                $userdata['password'] = $_POST['password'];
                
                $this->Functions->query($userdata);
                $reply = array('response'=> $this->success);
                echo json_encode($reply);
            }
        }
        else
        {
            $response = array('response' => $this->denied);
            echo json_encode($response);
        }
    }

    // public function Tokens()
    // {
    //     if(isset($_POST['request']))
    //     {
    //         if($_POST['request'] == 'Sent')
    //         {
    //             $this->Functions->get_tk_info();
    //             $reply = array('response'=> $this->success);
    //             echo json_encode($reply);
    //         }
    //     }
    //     else
    //     {
    //         $response = array('response' => $this->denied);
    //         echo json_encode($response);
    //     }
    // }

    public function get_data(){
        $query = $this->Functions->select();
        $val = array();
        foreach($query as $token){
            $val['response']= "Success";
            $val['data'][] = $token;
        }     
        echo json_encode($val);
    
    }

            //LOGIN FUNCTIONN
    public function f_login()
    {
        if(isset($_POST['request']))
        {
            if($_POST['request'] == 'Sent')
            {

                $email = $_POST['email'];
                $pass = $_POST['password'];
                $query = $this->Functions->get_login($email, $pass);

                if($query == NULL)
                {

                    $response = array('response' => 'Failed');
                    echo json_encode($response);

                }
                else
                {
                    $response = array('response' => 'Approved');
                    echo json_encode($response);
                }
            }
        }
        else 
        {
            $response = array('response' => "access denied");
            echo json_encode($response);


        }

    }

    //Get Top Token
    public function get_top_token_home(){
        $query = $this->Functions->get_token();
        $val = array();
        // foreach($query as $token){
        //     $val['response']= "Success";
        //     $val['data'][] = $token;
        // }
        $val['response']= "Success";
        $val['data'] = $query;
        echo json_encode($val);
    }
}
