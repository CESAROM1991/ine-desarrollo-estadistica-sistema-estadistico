<?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meses_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarMes($params){

		//print_r($params);

		$data = array(
			'meses' => $params['meses']
		);

		//print_r($data);

		$this->db->insert('meses', $data);

		$id = $this->db->insert_id();

		return $id;

	}

	
}

?>