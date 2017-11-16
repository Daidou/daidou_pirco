<?php

require_once "Citizen.php";

$Citizen1 = new Citizen("1","Haubourdin","dylan","30/08/1996","H");
$Citizen2 = new Citizen("2","Dinh","Synthia","4/02/1997","F");


var_dump($Citizen1->getCitizen());

$Citizen1->setMarried($Citizen2);

var_dump($Citizen1->getCitizen());
var_dump($Citizen2->getCitizen());

$tab = array($Citizen1,$Citizen2);

for ($i=0; $i < 2 ; $i++) {
  echo ($tab[$i]->getMarried()."<br>");
}
