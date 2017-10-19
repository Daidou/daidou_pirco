<?php

require_once "Personne.php";


$Personne1 = new Personne(1,"dylan","haubourdin","30/08/1996","M","Celibataire");
$Personne2 = new Personne(2,"ludo","Gillodes","23/05/1996","M","Celibataire");

$Personne1->getPersonne();
$Personne2->getPersonne();

var_dump($Personne1->getPersonne());
var_dump($Personne2->getPersonne());
