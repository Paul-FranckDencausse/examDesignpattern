<?php

class CompteBancaire {
    private $solde;
    private $titulaire;
    private $devise;
    private $premium;
    private $numeroDeCompte;

    public function __construct($titulaire, $devise, $numeroDeCompte) {
        $this->solde = 0;
        $this->titulaire = $titulaire;
        $this->devise = $devise;
        $this->premium = false;
        $this->numeroDeCompte = $numeroDeCompte;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getTitulaire() {
        return $this->titulaire;
    }

    public function getDevise() {
        return $this->devise;
    }

    public function getPremium() {
        return $this->premium;
    }

    public function getNumeroDeCompte() {
        return $this->numeroDeCompte;
    }

    public function setTitulaire($client) {
        $this->titulaire = $client;
    }

    public function setDevise($monnaie) {
        $this->devise = $monnaie;
    }

    public function setNumeroDeCompte($numeroDeCompte) {
        $this->numeroDeCompte = $numeroDeCompte;
    }

    public function deposerArgent($montant) {
        $this->solde += $montant;
    }

    public function retirerArgent($montant) {
        if ($this->solde > $montant) {
            $this->solde -= $montant;
        } else {
            echo "Vous êtes fauché";
        }
    }

    public function afficherSolde() {
        echo 'Le solde du compte est de ' . $this->solde . '.' . $this->devise;
    }
}

class GestionnaireComptes {
    private static $instances = [];

    public static function obtenirCompte($numeroDeCompte) {
        if (!isset(self::$instances[$numeroDeCompte])) {
            self::$instances[$numeroDeCompte] = new CompteBancaire('Nouveau Titulaire', 'EUR', $numeroDeCompte);
        }

        return self::$instances[$numeroDeCompte];
    }

    // Autres méthodes nécessaires pour gérer les comptes
}

// Exemple d'utilisation

$compte1 = GestionnaireComptes::obtenirCompte(12345);
$compte2 = GestionnaireComptes::obtenirCompte(54321);

// Les deux comptes ci-dessus pointent vers la même instance de CompteBancaire avec le numéro de compte 12345.

$compte1->deposerArgent(1000);
$compte2->retirerArgent(500);

$compte1->afficherSolde(); // Affiche "Le solde du compte est de 500.EUR"
$compte2->afficherSolde(); // Affiche "Le solde du compte est de 500.EUR"
