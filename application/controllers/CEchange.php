<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CEchange extends CI_Controller {
	public function index(){
	    redirect('welcome/exchange');
	}	

	public function exchangeList() {
		$data['exchangeList'] = $this->Echange->selectAll();

		$data['content'] = 'back_office/listExchange';
		$this->load->view('back_office/template', $data);
	}

}
