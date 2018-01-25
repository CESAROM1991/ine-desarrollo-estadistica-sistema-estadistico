<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Defunciones_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarDefunciones($params){
		$data = array(
			'edad' => $params['edad'],
			'hombres' => $params['hombres'],
			'mujeres' => $params['mujeres']
		);
		$this->db->insert('matricula',  $data);
		$id = $this->db->insert_id();
		return $id;
	}

}