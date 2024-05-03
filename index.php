<?php

// Inclusion du fichier compteBancaire.php qui contient la définition de la classe compteBancaire
require_once('./compteBancaire.php');

// Création de trois nouveaux objets compteBancaire avec différentes informations
$newCB = new compteBancaire('moi', '€', 4534634);
$newCB1 = new compteBancaire('toto', '£', 6548679867);
$newCB2 = new compteBancaire('tata', '$', 4534256546);

// Montant à transférer
$montant = 150;

// Affichage du solde initial du compte
var_dump($newCB->getSolde() . '    getsolde');

// Modification du solde du compte
$newCB->setSolde(1000);

// Affichage du nouveau solde du compte
var_dump($newCB->getSolde());
echo '<br/>';

// Affichage du titulaire du compte
var_dump($newCB->getTitulaire() . '    gettitulaire');
echo '<br/>';

// Affichage de la devise du compte
var_dump($newCB->getDevise() . '    getdevise');
echo '<br/>';

// Affichage du numéro de compte
var_dump($newCB->getNumeroDeCompte() . '    getcompte');
echo '<br/>';

// Affichage du statut premium du compte
var_dump($newCB->getPremium() . '    getpremium');
echo '<br/>';

// Affichage du solde sous forme d'une phrase
var_dump($newCB->afficherSolde());
echo '<br/>';

// Appel de la méthode pour transférer de l'argent
$newCB->transfererArgent();

?>




