<?php

/** dylan et ludo
 *
 */
class Citizen
{
private  $_id;
private  $_nom;
private  $_prenom;
private  $_dnaissance;
private  $_sexe;
private  $_ecivil;
private  $_conjoint;

  public function __construct($id,$nom,$prenom,$datenaissance,$sexe)
  {
    $this->_id = $id;
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dnaissance = $datenaissance;
    $this->_sexe = $sexe;
    $this->_ecivil = 'S';
    $this->_conjoint = null;
  }

  public function getCitizen(){ //on affiche un tableau qui contient les attribut indiquer

          return array('nom'           => $this->_nom,
                       'prenom'        => $this->_prenom,
                       'datenaissance' => $this->_dnaissance,
                       'sexe'          => $this->_sexe,
                       'ecivil'        => $this->_ecivil,
                       'conjoint'      => ($this->_conjoint == null) ? null : $this->getMarried()
                     );


  }

  public function getMarried(){ //on verifie si il est MARRIED
    if($this->_ecivil == 'M'){
      return $this->_ecivil;
    }
    return "false";
  }
  public function getDivorced(){ //on verifie si il est DIVORCED
    if ($this->_ecivil == 'D') {
      return true;
    }
    return false;
  }
  public function getWidowed(){ //on verifie si elle est WIDOWED
    if ($this->_ecivil == 'V') {
      return true;
    }
    return false;
  }

  public function setnom($nom){
     $this->_nom = $nom;
  }
  //public function getall(){
  //  echo $this->_nom . " " . $this->_prenom . " " . $this->_dnaissance . " " . $this->_ecivil;

  //}

  public function setprenom($prenom){
    $this->_prenom = $prenom;
  }

  //on vérifie d'abord que la personne n'est pas déjà marriée
  public function setMarried($conjoint){
    if($this->_ecivil != 'M'){
      $this->_conjoint = $conjoint;
      $this->_ecivil = 'M';
      $conjoint->setMarried($this);
    }
  }

  public function setDivorced(){
    if($this->getMarried() /* == true ?*/){
      $this->_ecivil = 'D';
    }
  }

  public function setWidowed(){
    if($this->getMarried() /* == true ?*/){
      $this->_ecivil = 'V';
    }
  }


}
