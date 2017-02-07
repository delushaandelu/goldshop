<?php
class Stock_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database("goldshop");
}
    
    public function insert_stock_to_db($users){
  
        $this->db->insert('stock_item',$users);
        redirect('stock');
 
    
}
    public function get_all_stock(){
        $query=$this->db->get('stock_item');
        return $query->result();
    
}
}
?>