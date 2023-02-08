<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CObjet extends CI_Controller {
	public function select(){
		$data['obj'] = $this->Objet->selection();
		$this->load->view('objet_affichage', $data);
	}

	public function exchangeList(){	
		$data['itemList'] = $this->Objet->selection2($this->session->userdata('user'));
		$data['content'] = 'front_office/exchange';
		$this->load->view('front_office/template', $data);
	}

	public function itemList($idObj2="", $idPers2=""){	
		$data['idObj2'] =  $idObj2;
		$data['idPers2'] =  $idPers2;
		$data['itemList'] = $this->Objet->selection3($this->session->userdata('user'));
		$data['content'] = 'front_office/itemChoose';
		$this->load->view('front_office/template', $data);
	}

	public function insertEchange($idObj2="", $idObj1="", $idPers2=""){
		$this->Echange->insertion($this->session->userdata('user'), $idPers2, $idObj1, $idObj2);
		$data['itemList'] = $this->Objet->selection2($this->session->userdata('user'));
		$data['content'] = 'front_office/exchange';
		$this->load->view('front_office/template', $data);
	}

	public function acceptEchange($idEchange="", $idObj1="", $idObj2="", $idPers1="") {
		$this->Echange->update($idEchange);
		$this->Echange->setOwner($this->session->userdata('user'), $idObj1);
		$this->Echange->setOwner($idPers1, $idObj2);
		$this->Echange->refresh($this->session->userdata('user'), $idObj2);
		
		$this->requestList();
	}

	public function deleteEchange($idEchange="", $idObj1="", $idObj2="", $idPers1="") {
		$this->Echange->delete($idEchange);
		
		$this->requestList();
	}

	public function requestList() {
		$data['echangeList'] = $this->Echange->selection($this->session->userdata('user'));

		$data['itemList'] = $this->Objet->selection2($this->session->userdata('user'));
		$data['content'] = 'front_office/request';
		$this->load->view('front_office/template', $data);
	}

	public function allItem() {
		$data['itemList'] = $this->Objet->selection();

		$data['content'] = 'back_office/listItem';
		$this->load->view('back_office/template', $data);
	}

	public function categoryItem($idC = '') {
		$data['itemList'] = $this->Objet->findByCategory($idC);

		$data['content'] = 'back_office/listItem';
		$this->load->view('back_office/template', $data);
	}

	public function historique(){
		$data['echangeList'] = $this->Echange->selectionEchange();

		$data['content'] = 'front_office/historical';
		$this->load->view('front_office/template', $data);	
	}

	public function administration(){
		$data['itemList'] = $this->Objet->selection3($this->session->userdata('user'));

		$data['content'] = 'front_office/administration';
		$this->load->view('front_office/template', $data);	
	}

	public function deleteItem($idObj=""){
		$this->Objet->delete($idObj);
		$data['itemList'] = $this->Objet->selection3($this->session->userdata('user'));

		$data['content'] = 'front_office/administration';
		$this->load->view('front_office/template', $data);
	}

	public function saveItem(){
		$categorie = $this->input->post('categorie');
		$nom = $this->input->post('nom');
		$photo= $this->input->post('photo');
		$prix = $this->input->post('prix');
		$description= $this->input->post('description');

		$this->Objet->insertion($this->session->userdata('user'),$categorie, $nom, $photo, $prix, $description);
		$data['itemList'] = $this->Objet->selection3($this->session->userdata('user'));

		$data['content'] = 'front_office/administration';
		$this->load->view('front_office/template', $data);	
	}

	public function modifyItem(){
		$idCategorie = $this->input->post('categorie');
		$nom = $this->input->post('nom');
		$photo = $this->input->post('photo');
		$prix = $this->input->post('prix');
		$description = $this->input->post('description');

		$this->Objet->update($nom, $photo, $prix, $description, $this->session->userdata('user'));
		$data['itemList'] = $this->Objet->selection3($this->session->userdata('user'));

		$data['content'] = 'front_office/administration';
		$this->load->view('front_office/template', $data);
	}

	public function recherche(){
		$nom = $this->input->get('nom');
		$idCategorie = $this->input->get('categorie');

		$data['itemList'] = $this->Objet->findByNameCategorie($nom, $idCategorie);	
		$data['content'] = 'front_office/exchange';

		$this->load->view('front_office/template', $data);
	}

}
