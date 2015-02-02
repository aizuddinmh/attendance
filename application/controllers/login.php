<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		$this->load->view('theme');
	}

	public function testcrud()
	{

		 $crud = new grocery_CRUD();
 
    
    $crud->set_table('lecturer');
    $crud->unset_export()
         ->unset_print();
    $crud->set_theme('datatables');
    $crud->set_subject('Lecturer');
    $output = $crud->render(); 

    $this->load->view('theme',$output);
	}

	public function pelajar()
	{

		 $crud = new grocery_CRUD();
 
    
    $crud->set_table('pelajar');
    //$crud->where('lec_matric_no',5354441);
    $output = $crud->render(); 

    $this->load->view('theme',$output);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */