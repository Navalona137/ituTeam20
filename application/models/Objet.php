<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {

    public function insertion($idPersonne, $idCategorie, $nom, $photo, $prix, $description){
        $data=array( 
            'idPersonne' => $idPersonne,
            'idCategorie' => $idCategorie,
            'nom' => $nom,
            'photo' => $photo,
            'prix' => $prix,
            'description' => $description 
        );
        $this->db->insert('objet', $data);
    }


    public function selection(){
        $r = $this->db->query('select objet.idObjet, objet.nom, objet.photo, objet.description, objet.prix, personne.prenom from objet join personne on objet.idPersonne=personne.idPersonne');
        return $r->result();	
    }

    public function selection2($id){
        $r = $this->db->query("select objet.idObjet, objet.idPersonne, objet.nom, objet.photo, objet.description, objet.prix, personne.prenom from objet join personne on objet.idPersonne=personne.idPersonne where objet.idPersonne != '$id'");
        return $r->result();    
    }

    public function selection3($id){
        $r = $this->db->query("select objet.idObjet, objet.idCategorie,  objet.nom, objet.idPersonne, objet.photo, objet.description, objet.prix, personne.prenom from objet join personne on objet.idPersonne=personne.idPersonne where objet.idPersonne = '$id'");
        return $r->result();    
    }

    public function selectionPhoto($id){
        $r = $this->db->query("select objet.photo from objet where objet.idObjet = '$id'");
        return $r->result();    
    }

    public function findByCategory($idC){
        $r = $this->db->query("select * from objet where idCategorie = '$idC'");
        return $r->result();	
    }

    public function update($nom, $photo, $prix, $description, $id){
        $this->db->query("update objet set nom='$nom' ,photo='$photo', prix='$prix', description='$description' where idObjet= '$id'");
    }

    public function delete($id){
        $this->db->query("delete from objet where idObjet= '$id'");
    }

    function findByNameCategorie($search, $categorie) {
        $r = $this->db->query("select * from objet where idCategorie = '$categorie' and nom = '$search'");
        return $r->result();
    }

}