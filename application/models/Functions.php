<?php

class Functions extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_token(){
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

    public function query($acc_data)
    {
        $this->db->insert($this->tbl_users,$acc_data);
    }

    

    public function select(){
        return $this->db->get('tbl_token')->result();
    }

    //LOGIN
    public function get_login($email,$password)
    {

        $this->db->select('email, password');
        $this->db->from($this->tbl_users);
        $this->db->where(array('email'=>$email,
                                'password'=>$password));

        $query = $this->db->get();        //kunukuha lahat ng content ng query 

        if($query->result() == NULL)
        {
            return NULL;
        }
        else
        {
            return $query->result();
        }

    }
}
?>