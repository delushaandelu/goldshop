<?php
class Stock extends  CI_Controller{
    
     function __construct() {
        parent::__construct();
        $this->load->helper('url');
       /* $this->load->model('Stock_model','',TRUE); */
       
    } 
    
    public function add_stock(){
        $this->load->view('add_stock_view');
    }
    
    public function add_new_item(){
        
    }
}

?>