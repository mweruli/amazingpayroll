<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paybankf_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }        
    /*
     * Get all payanalf
     */
    public function getPaybankf(){
        $query = $this ->db ->get('paybankf');
        if ($query->num_rows()> 0) {
            return $query->result();
        }
    }
    public function addPaybankf($data){
        $this->db->insert('paybankf',$data);
        return $this->db->insert_id();
    }

    public function getSinglePaybankf($id){
       $query = $this->db->get_where('paybankf', array('id' =>$id));
        if ($query->num_rows()>0) {
            return $query->row();
        }
    }
     public function updatePaybankf($id,$data){
         $this->db->where('id',$id);
         $this->db->update('paybankf',$data);
    }
    public function deletePaybankf($id){
      return $this->db->delete('paybankf',array('id'=>$id));
    }


    
}
