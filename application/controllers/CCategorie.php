<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCategorie extends CI_Controller {
	public function addItem(){
		$data['categorieList'] = $this->Categorie->selection();		
		$data['content'] = 'front_office/form';
		$this->load->view('front_office/template', $data);	
	}

	public function seeItem($idObjet="", $idCategorie="", $nom="", $photo="", $prix="", $description=""){
		$data['idObjet'] =  $idObjet;
		$data['idCategorie'] =  $idCategorie;
		$data['nom'] =  $nom;
		$data['photo'] =  $photo;
		$data['prix'] =  $prix;
		//echo $idCategorie;
		//echo $nom;
		$data['description'] =  $description;
		$data['categorieList'] = $this->Categorie->selection();		
		$data['content'] = 'front_office/formModify';
		$this->load->view('front_office/template', $data);	
	}	
}
