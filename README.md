

# Gestion des Comptes Bancaires

Ce script PHP permet de gérer des comptes bancaires et de réaliser différentes opérations telles que l'affichage du solde, le transfert d'argent, etc.

## Fonctionnalités

- Création de nouveaux comptes bancaires avec des attributs tels que le titulaire, la devise, le solde initial, etc.
- Accès aux informations des comptes tels que le solde, le titulaire, la devise, etc.
- Modification des informations des comptes tels que le solde, le titulaire, la devise, etc.
- Affichage du solde d'un compte bancaire.
- Transfert d'argent entre deux comptes bancaires.

## Utilisation

1. Inclure le fichier `compteBancaire.php` dans votre script PHP.

2. Créer de nouveaux objets `compteBancaire` en spécifiant le titulaire, la devise et le solde initial.

3. Utiliser les méthodes disponibles pour accéder ou modifier les informations des comptes bancaires, telles que `getSolde`, `setSolde`, `getTitulaire`, `setTitulaire`, etc.

4. Utiliser la méthode `afficherSolde` pour afficher le solde d'un compte bancaire.

5. Utiliser la méthode `transfererArgent` pour transférer de l'argent entre deux comptes bancaires.

## Exemple

```php
require_once('./compteBancaire.php');

// Créer de nouveaux comptes bancaires
$newCB = new compteBancaire('moi', '€', 4534634);
$newCB1 = new compteBancaire('toto', '£', 6548679867);
$newCB2 = new compteBancaire('tata', '$', 4534256546);

// Afficher le solde d'un compte bancaire
var_dump($newCB->afficherSolde());

// Modifier le solde d'un compte bancaire
$newCB->setSolde(1000);

// Afficher le solde mis à jour
var_dump($newCB->afficherSolde());

// Afficher d'autres informations du compte
var_dump($newCB->getTitulaire());
var_dump($newCB->getDevise());
var_dump($newCB->getNumeroDeCompte());
var_dump($newCB->getPremium());

// Transférer de l'argent entre deux comptes
$newCB->transfererArgent($newCB1, 150);
```

## Contribution

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, vous pouvez :

- Ajouter de nouvelles fonctionnalités pour améliorer la gestion des comptes bancaires.
- Améliorer la lisibilité ou l'efficacité du code existant.
- Proposer des corrections de bugs ou des suggestions d'amélioration.

## Licence

Ce script PHP est sous licence MIT. Vous pouvez consulter le fichier `LICENSE` pour plus d'informations.

---

N'oubliez pas de personnaliser ce README en fonction des spécificités de votre projet et des instructions d'utilisation.
