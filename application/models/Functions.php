<?php

class Functions extends CI_Model{

    protected $tbl_users = 'tbl_users';
    protected $tbl_token = 'tbl_token';
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    // Get Top 30 Token Informations
    public function get_top_token(){
        // $this->db->select("top, token_name, curr_prc, cir_supp");
        // $this->db->from('tbl_token');
        // $query = $this->db->get();        //kunukuha lahat ng content ng query
        $query = $this->db->select("top, token_name, curr_prc, cir_supp")
            ->get('tbl_token');
            //->limit(30)

        // $query = $this->db->select("top, token_name, curr_prc, cir_supp, sentiment_score")
        // ->from ('tbl_token T')
        // ->join ('tbl_report R', 'T.token_id = R.token_id')
        // ->get();
        // return $query->result();
        
        if($query->result() == NULL){
            return NULL;
        }
        else{
            return$query->result();
        }

      
    }

    // Insert Data (Singup)
    public function insert_data($acc_data) {
        $this->db->insert($this->tbl_users,$acc_data);
    }

    // Get Data (Login)
    public function get_data($email,$password) {
        $this->db->select('email, password');
        $this->db->from($this->tbl_users);
        $this->db->where(array('email'=>$email,
                                'password'=>$password));
        $query = $this->db->get();        //kunukuha lahat ng content ng query 
        if($query->result() == NULL) {
            return NULL;
        }
        else {
            return $query->result();
        }

    }
}
?>