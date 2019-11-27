<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function get_payanalf($id)
    {
        return $this->db->get_where('payanalf',array('id'=>$id))->row_array();
    }
        
        
    /*
     * Get all payanalf
     */
    public function getPost(){
        $query = $this ->db ->get('payanalf');
        if ($query->num_rows()> 0) {
            return $query->result();
        }
    }
    function get_all_payanalf()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('payanalf')->result_array();
    }
        
    /*
     * function to add new payanalf
     */
   public function addPost($data)
    {
        $this->db->insert('payanalf',$data);
        return $this->db->insert_id();
    }
    public function getSinglePost($id){
        $query = $this->db->get_where('payanalf', array('id' =>$id));
        if ($query->num_rows()>0) {
            return $query->row();
        }
    }

    public function updatePost($id, $data){
        $this->db->where('id',$id);
         $this->db->update('payanalf',$data);
    }

    public function deletePost($id){
        return $this->db->delete('payanalf', ['id'=>$id]);
    }
    
    /*
     * function to update payanalf
     */
    function update_payanalf($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('payanalf',$params);
    }
    
    /*
     * function to delete payanalf
     */
    function delete_payanalf($id)
    {
        return $this->db->delete('payanalf',array('id'=>$id));
    }

    
}
