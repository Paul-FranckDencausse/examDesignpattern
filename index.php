<?php

require_once('./compteBancaire.php');

$newCB = new compteBancaire('moi', '€', 4534634);
$newCB1 = new compteBancaire('toto', '£', 6548679867);
$newCB2 = new compteBancaire('tata', '$', 4534256546);
$montant = 150;


var_dump($newCB->getSolde() . '    getsolde');
$newCB->setSolde(1000);
var_dump($newCB->getSolde());
echo '<br/>';
// $newCB->setTitulaire('Roger');
var_dump($newCB->getTitulaire() . '    gettitulaire');
echo '<br/>';
// $newCB->setDevise('$');
 var_dump($newCB->getDevise() . '    getdevise');
echo '<br/>';
// $newCB->setPremium(true);
// $newCB->setNumeroDeCompte(123456789);
var_dump($newCB->getNumeroDeCompte() . '    getcompte');
echo '<br/>';

var_dump($newCB->getPremium() . '    getpremium');
echo '<br/>';
var_dump($newCB->afficherSolde());
echo '<br/>';
$newCB->transfererArgent();






