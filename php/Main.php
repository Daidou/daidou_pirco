<?php

require_once "Citizen.php";

$Citizen1 = new Citizen("haubourdin","dylan","30/08/1996","M");
$Citizen2 = new Citizen("Dinh","Synthia","4/02/1997","F");


var_dump($Citizen1->getCitizen());

$Citizen1->setMarried($Citizen2);

var_dump($Citizen1->getCitizen());
