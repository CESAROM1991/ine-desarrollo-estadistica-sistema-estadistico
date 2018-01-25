<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meses extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Meses_model');
		$this->load->helper('url'); 
	}
	
	public function index()
	{
		 

	}
	
	public function cargar()
	{
		if(!empty($_FILES['archivo'])){
			$filename=$_FILES['archivo']['tmp_name'];
				//print_r($filename);
			$handle =  fopen($filename, "r");
				while(($data = fgetcsv($handle, 1000, ","))!== FALSE)
				{
					$params['meses']=$data[0];
					$this->Meses_model->InsertarMes($params);
				}
		}
		$this->load->view('/Meses/cargar');
	}

}

?>
