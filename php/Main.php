<?php

require_once "Personne.php";


$Personne1 = new Personne(1,"dylan","haubourdin","30/08/1996","M","Celibataire");
$Personne2 = new Personne(2,"ludo","Gillodes","27/08/1996","M","Celibataire");


var_dump(getId());


var_dump($Personne2->setnom());

var_dump($Personne2->getPersonne());

var_dump($Personne1->getPersonne());
