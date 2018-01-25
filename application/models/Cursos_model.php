<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarCurso($params){

		//print_r($params);

		$data = array(
			//nombre del campo         //variable
			'nombre_curso' => $params['nombre_curso'],
			'cantidad_videos' => $params['cantidad_videos']
		);

		//print_r($data);
			//tabla
		$this->db->insert('cursos', $data);

		$id = $this->db->insert_id();

		return $id;

	}

	
}

?>