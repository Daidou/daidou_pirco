<?php


/** dylan et ludo
 *
 */
class Personne
{
private  $_id;
private  $_nom;
private  $_prenom;
private  $_dnaissance;
private  $_sexe;
private  $_ecivil;

  public function __construct($nom,$prenom,$datenaissance,$sexe,$etatcivil)
  {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dnaissance = $datenaissance;
    $this->_sexe = $sexe;
    $this->_ecivil = $etatcivil;
  }

  public function getPersonne(){ //on affiche un tableau qui contient les attribut indiquer

          return array('nom'           => $this->_nom,
                       'prenom'        => $this->_prenom,
                       'datenaissance' => $this->_dnaissance,
                       'sexe'          => $this->_sexe,
                       'ecivil'        => $this->_ecivil
                     );


  }
  public function setnom($nom){
     $this->_nom = $nom;
  }
  public function setprenom($prenom){
    $this->_prenom = $prenom;
  }
  public function setEtatcivil($etatcivil){
    $this->_ecivil = $etatcivil;
  }
  public function Mariage(){

    if ($this->_ecivil=="null") {

    }else {

    }

  }



}
