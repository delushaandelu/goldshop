<?php
class Stock_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database("goldshop");
}
    
    public function insert_stock_to_db($users){
  
        $this->db->insert('stock_item',$users);
        redirect('index.php/stock/manage_stock');
 
    
}
    public function get_all_stock(){
        $query=$this->db->get('stock_item');
        return $query->result();
    
}
    public function delete_item($ID){
        $this->db->select('Quantity');
        $this->db->from('stock_item');
        $this->db->where('Item_ID',$ID);
        $query=$this->db->get();
        $data = $query->result_array();
                
        if(($data[0]['Quantity']) == 0){
                $this->db->where('Item_ID',$ID);
                $this->db->delete('stock_item');
                redirect('index.php/stock/manage_stock');
        }
        else{
            redirect('index.php/stock/alerts');
           
            
        }
      /* echo $data['Quantity'];*/
            /*
            {
                $this->db->where('Item_ID',$ID);
                $this->db->delete('stock_item');
                redirect('stock');
            }*/
        
    }
    public function get_item_update($ID){
        $this->db->select('*');
        $this->db->from('stock_item');
        $this->db->where('Item_ID',$ID);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
             return $query->result();
        }
    }
    public function update($item,$ID){
        $this->db->where('Item_ID',$ID);
        $this->db->update('stock_item',$item);
        redirect('index.php/stock/manage_stock');
        
    }
}
?>