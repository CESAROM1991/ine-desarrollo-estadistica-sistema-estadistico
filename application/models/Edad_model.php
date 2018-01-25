<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edad_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarEdad($params){

		//print_r($params);

		$data = array(
			//nombre del campo         //variable
			'codigo' => $params['codigo'],
			'edad' => $params['edad']
		);

		//print_r($data);
			//tabla
		$this->db->insert('edad', $data);

		$id = $this->db->insert_id();

		return $id;

	}

	
}

?>