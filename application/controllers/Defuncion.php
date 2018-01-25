<?php
class Defuncion extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Defunciones_model');
      $this->load->helper('url'); 
	}

   public function cargar()
      {
      if(!empty($_FILES['archivo'])){
         $filename=$_FILES['archivo']['tmp_name'];
            //print_r($filename);
         $handle =  fopen($filename, "r");
            while(($data = fgetcsv($handle, 1000, ","))!== FALSE)
            {
               $params['edad']=$data[0];
               $params['hombres']=$data[1];
               $params['mujeres']=$data[2];
               //print_r($params['departamento']);
               $this->Matricula_model->InsertarDefunciones($params);
            }
      }
      $this->load->view('/Defunciones/cargar');
   }


}
?>