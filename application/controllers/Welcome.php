<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */ 
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		$this->load->view('login');
	}

	public function login2()
	{
		$this->load->view('login2');
	}

	public function sports()
	{
		$this->load->view('sports');
	}

	public function update()
	{
		$this->load->view('update');
	}

	public function sports2()
	{
		$this->load->view('sports2');
	}
	public function film2()
	{
		$this->load->view('film2');
	}
	public function politics2()
	{
		$this->load->view('politics2');
	}

	public function n()
	{
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$g1=$_POST['g1'];
		$ids=$_POST['ids'];
		$this->mo->n1($n1,$n2,$g1,$n3,$ids);
		//$this->mo->g1($g1);
		//$this->load->view('welcome_message');
	}

	// public function g()
	// {
	// 	//$n1=$_POST['n1'];
	// 	$g1=$_POST['g1'];
	// 	//$this->mo->n1($n1);
	// 	$this->mo->g1($g1);
	// 	$this->load->view('welcome_message');
	// }

	public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 1000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ($this->upload->do_upload('userfile')) {
           //$data = array('upload_data' => $this->upload->data()); 
            //$this->load->view('welcome_message', $data); 
            echo "upload Success"; 
         }
			
         
      }
	
	





}

?>