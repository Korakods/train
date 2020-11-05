<?php defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	
    
     function InsertData($data){
     $result =  $this->db->insert('train',$data);
        return $result;
    }

    function show()
	{
        $this->db->select('*');
		$result = $this->db->get('train');
		return $result;
    }


}