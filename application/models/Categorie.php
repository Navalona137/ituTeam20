<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model {

    public function insertion($nom){
        $data=array(
            'nom' => $nom,

        );
        $this->db->insert('categorie', $data);
    }

    public function selection(){
        $r = $this->db->query('select * from categorie');
        return $r->result();	
    }

}