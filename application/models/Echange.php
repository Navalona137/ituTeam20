<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Model {

    public function insertion($idpers1, $idpers2, $idobj1, $idobj2){
        $data=array(
            'idPersonne1' => $idpers1,
            'idPersonne2' => $idpers2,
            'idObjet1' => $idobj1,
            'idObjet2' => $idobj2
        );
        $date=array(
            'dateEchange' => "now()",
            'dateAcceptation' => "default"
        );
        $this->db->set($data);
        $this->db->set($date, null, false);
        $this->db->insert('echange');
    }

    public function selectAll() {
        $r = $this->db->query("select * from echange");
        
        return $r->result();
    }

    public function selection($idUser){
        $r = $this->db->query("select echange.*, objet1.photo as photo1, objet2.photo as photo2 
                              from echange 
                              join objet as objet1 on echange.idObjet1 = objet1.idObjet 
                              join objet as objet2 on echange.idObjet2 = objet2.idObjet
                              where idPersonne2 = '$idUser' and dateAcceptation is null"
        );
        
        return $r->result();
    }

    public function selectionEchange(){
        $r = $this->db->query("select echange.*, objet1.photo as photo1, objet2.photo as photo2,    objet1.nom,personne1.prenom as prenom1, personne2.prenom as prenom2     
                              from echange 
                              join objet as objet1 on echange.idObjet1 = objet1.idObjet 
                              join objet as objet2 on echange.idObjet2 = objet2.idObjet
                              join personne as personne1 on echange.idPersonne1 = personne1.idPersonne 
                              join personne as personne2 on echange.idPersonne2 = personne2.idPersonne
                              and dateAcceptation is null"
        );
        
        return $r->result();
    }

    public function update($id){
        $this->db->query("update echange set dateAcceptation = now() where idEchange= '$id'");
    }

    public function setOwner($idP, $idO) {
        $this->db->query("update objet set idPersonne = '$idP' where idObjet = '$idO'");
    }

    public function delete($id){
        $this->db->query("delete from echange where idEchange= '$id'");
    }

    public function refresh($idP, $idO) {
        $this->db->query("delete from echange where idPersonne2= '$idP' and idObjet2='$idO' and dateAcceptation is null");
    }
}