<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {
	public function index(){
	    $this->load->view('v_login');
	}	

	public function verification(){
		$email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $log = $this->Login->selection();
        
        foreach($log as $l) {
        	if($email == $l->email && $mdp == $l->mdp){
	            $this->session->set_userdata('user', $l->idPersonne);
	            
	            redirect(base_url('/welcome/home'));
	        }	        
	        if($email == "admin" && $mdp == "admin"){
				redirect(base_url('/welcome/admin'));
			}
        }
		redirect(base_url('/clogin'));

	}
    
}
