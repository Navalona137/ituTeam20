<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personne extends CI_Model {

    public function insertion($nom, $prenom, $dtn, $sexe){
        $data=array(
            'nom' => $nom,
            'prenom' => $prenom,
            'dtn' => $dtn,
            'sexe' => $sexe,
        );
        $this->db->insert('personne', $data);
    }

//-------------------------------------------------------------------------
    public function selection(){
        $r = $this->db->query('select * from personne');
        return $r->result();	
    }

    public function selection2($id){
        $r = $this->db->query("select * from personne where idPersonne = '$id'");
        return $r->result();    
    }

    public function dernier(){
        $r = $this->db->query('select idPersonne from personne order by idPersonne desc limit 1');
        return $r->row_array()['idPersonne']; 
    }

//-------------------------------------------------------------------------

    public function update($nom, $prenom, $dtn, $sexe, $id){
        $this->db->query("update personne set nom= '$nom' ,prenom= '$prenom' ,dtn= '$dtn' ,sexe= '$sexe' where idPersonne= '$id'");
    }

//-------------------------------------------------------------------------

    public function delete($id){
        $this->db->query("delete from personne where idPersonne= '$id'");
    }
}