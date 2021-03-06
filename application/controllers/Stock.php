<?php
class Stock extends  CI_Controller{
    
     function __construct() {
        parent::__construct();
        $this->load->helper('url');
         $this->load->model('Stock_model','',TRUE); 
       /* $this->load->model('Stock_model','',TRUE); */
       
    } 
    
    public function add_stock(){
        $this->load->view('template/header');
		$this->load->view('template/header_nav');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
        $this->load->view('add_stock_view');
    }
    
    public function add_new_item(){
        $this->load->helper('url');
        $this->load->library('form_validation');
       $this->form_validation->set_rules('Category','category','trim|required');
        $this->form_validation->set_rules('item_name','name','trim|required');
       $this->form_validation->set_rules('item_price','cost','trim|required');
        $this->form_validation->set_rules('discount','margin','trim|required');
        $this->form_validation->set_rules('totalprice','selling','trim|required');
        $this->form_validation->set_rules('quantity','quantity','trim|required');
        
        if($this->form_validation->run()==false){
            $this->load->view('add_stock_view');
        }
        else{
            $users=array(
          'Category' => $this->input->post('Category'),
            'Item_Name' => $this->input->post('item_name'),
            'Cost' => $this->input->post('item_price'),
            'Margin' => $this->input->post('discount'),
            'Selling' => $this->input->post('totalprice'),
            'Quantity' => $this->input->post('quantity')
            
            );
            $this->Stock_model->insert_stock_to_db($users);
            $data['message'] = 'Data Inserted Successfully';
            $this->load->view('add_stock_view', $data);
        }
       
    }
    
    public function manage_stock(){
        $this->load->view('template/header');
		$this->load->view('template/header_nav');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
        $data['stock_list']=$this->Stock_model->get_all_stock();
        $this->load->view('show_stock',$data);
    }
    
    public function delete_stock($ID){
        $this->Stock_model->delete_item($ID);
         
        
    }
    public function alerts(){
        $this->load->view('template/header');
		$this->load->view('template/header_nav');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
        $data['stock_list']=$this->Stock_model->get_all_stock();
        $this->load->view('show_stock',$data);
         echo "<script type='text/javascript'>";
            echo "alert('stock is available')";
        echo "</script>";
    }
    
    public function edit_stock($ID){
         $this->load->view('template/header');
		$this->load->view('template/header_nav');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
        $data['item'] = $this->Stock_model->get_item_update($ID);
        $this->load->view('edit_stock',$data);
        
    }
    public function update(){
         $this->load->helper('url');
        $this->load->library('form_validation');
      /* $this->form_validation->set_rules('Category','category','trim|required');*/
        $this->form_validation->set_rules('item_name','name','trim|required');
       $this->form_validation->set_rules('item_price','cost','trim|required');
        $this->form_validation->set_rules('discount','margin','trim|required');
        $this->form_validation->set_rules('totalprice','selling','trim|required');
        $this->form_validation->set_rules('quantity','quantity','trim|required');
        $ID= $this->input->post('item_id');
        if($this->form_validation->run()==false){
            $this->edit_stock($ID);
            echo "fdfgfgr";
        }
        else{
            $item=array(
       /*   'Category' => $this->input->post('Category'),*/
            'Item_Name' => $this->input->post('item_name'),
            'Cost' => $this->input->post('item_price'),
            'Margin' => $this->input->post('discount'),
            'Selling' => $this->input->post('totalprice'),
            'Quantity' => $this->input->post('quantity')
            
            );
            $this->Stock_model->update($item,$ID);
            redirect('index.php/stock/manage_stock');
        /*    $data['message'] = 'Data Inserted Successfully';
            $this->load->view('add_stock_view', $data);*/
        }
    }
}

?>