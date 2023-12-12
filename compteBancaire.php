<?php
//déclaration de la classe
class compteBancaire {
    //attributs de la classe
    private $solde;
    private $titulaire;
    private $devise;
    private $premium;
    private $numeroDeCompte;

    public function __construct($titulaire,$devise, $numeroDeCompte){
        //initialisation des attributs
        $this->solde = 0;
        $this->titulaire = $titulaire;
        $this->devise = $devise;
        $this->premium = false;
        $this->devise = $numeroDeCompte;

    }
    //method les  fonctions qui modifient en dynamique ou pas
    public function getSolde(){
        //affiche le solde su compte
        return $this->solde;
    }
    public function getTitulaire(){
        //affiche le titulaire du compte
        return $this->titulaire;
    }
    public function getDevise(){
        //affiche la devise dans laquelle les sous sont émis
        return $this->devise;
    }
    public function getPremium(){
        //affiche le statut VIP
        return $this->premium;
    }
    public function getNumeroDeCompte(){
        //affiche le numéro de compte
        return $this->numeroDeCompte;
    }
    private function setSolde(){
        //initialise le compte à 0 par défaut
         $this->solde = 0;
    }
    public function setTitulaire($client){
        //définit le propriétaire du compte
        $this->titulaire = $client;
    }
    public function setDevise($monnaie){
        //définit la devise dans laquelle sont émises les peçetas
        $this->devise = $monnaie;
    }
    private function setNumeroDeCompte($numeroDeCompte){
        $this->numeroDeCompte = $numeroDeCompte;
    }
    public function deposerArgent($montant){
        //ajoute le montant du dépôt au solde du compte
        $this->solde = $this->solde + $montant;
    }

    public function retirerArgent($montant){
        //retire le montant du retrait au solde du compte
        if ($solde > $montant) {
            // le solde du compte ne peut pas être négatif. Sinon on paie des AGIOs.
            $this->solde = $this->solde - $montant;
        }
        else {
            //message d'erreur
            echo "Vous êtes fauché";
        }
    }

    public function afficherSolde($solde){
        //pour verbaliser 
        echo 'Le solde du compte est de' . $this->solde . "." . $this->monnaie;
        
    }
    public function transfererArgent($montant,$newCB,$newCB1){
        if($newCB > $montant){
            $this->newCB = $newCB - $montant;
            $this->newCB1 = $newCB1 + $montant;
        }
        else {
            echo "Vous n'en avez pas les moyens ";
        }
    }

}   