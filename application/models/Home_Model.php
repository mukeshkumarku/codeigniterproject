<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Model extends CI_Model {


	

    public function savedata(){
		$data = array(  'name'=>  $this->input->post('name'),
						'email'=>$this->input->post('email'),
						'mobile'=>$this->input->post('mobile'),
						'created'=>date('d/m/y'));
						$this->db->insert('users', $data);
			echo'<div class="alert alert-success">One record inserted Successfully...</div>';
			exit;
	}	    






}

?>

