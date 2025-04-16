php
CopyEdit
<?php

interface ReservableInterface {
  
  public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;
  
}

abstract class Vehicule {
  
  
  protected $id;
  protected $immatriculation;
  protected $marque;
  protected $modele;
  protected $prixJour;
  protected $disponible;
  
  
   public function __construct($immatriculation,$marque,$modele,$prixJour,$disponible){
    
    
                        
                        $this->immatriculation=$immatriculation;
                        $this->marque=$marque;
                        $this->modele=$modele;
                        $this->prixJour=$prixJour;
                        $this->disponible=$disponible;
                        
    
  }
  
  
  public function afficherDetails(){
    
    return "immatriculation : $this->immatriculation . marque :$this->marque . modele: $this->modele .  prixJour :$this->prixJour . disponible: $this->disponible";
    
  }
  
  public function calculerPrix(int $jours): float{
    
    return "$this->prixJour * $jours";
    
  }
  
  
  public function estDisponible(): bool{
    
    return "$this->disponible";
    
  }
  
  abstract public function getType(): string;
  
  
}

class Voiture extends Vehicule{
  
  protected $nbPortes;
  protected $transmission;
  
  public function __construct($nbPortes,$transmission,$immatriculation,$marque,$modele,$prixJour,$disponible){
    parent::__construct($immatriculation,$marque,$modele,$prixJour,$disponible);
    
     $this->nbPortes=$nbPortes;
     $this->transmission=$transmission;
    
  }
  
    public function getType(): string {
        return "Voiture";
    }
    
      public function afficherDetails(){
    
    return "nombre de port: $this->nbPortes . transmission: $this->transmission . immatriculation : $this->immatriculation . marque :$this->marque . modele: $this->modele .  prixJour :$this->prixJour . disponible: $this->disponible";
    
  }
//     public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;{
    
//   }

}
class Moto extends Vehicule{
  
  protected $cylindree;

  public function __construct($cylindree,$immatriculation,$marque,$modele,$prixJour,$disponible){
    parent::__construct($immatriculation,$marque,$modele,$prixJour,$disponible);
    
     $this->cylindree=$cylindree;
    
  }
  
    public function getType(): string {
        return "Moto";
    }
      public function afficherDetails(){
    
    return "cylindree: $this->cylindree . immatriculation : $this->immatriculation . marque :$this->marque . modele: $this->modele .  prixJour :$this->prixJour . disponible: $this->disponible";
    
  }
//       public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;{
    
//   }



}
class Camion extends Vehicule{
  
  protected $capaciteTonnage;

  public function __construct($capaciteTonnage,$immatriculation,$marque,$modele,$prixJour,$disponible){
    parent::__construct($immatriculation,$marque,$modele,$prixJour,$disponible);
    
     $this->capaciteTonnage=$capaciteTonnage;
    
  }
  
    public function getType(): string {
        return "Moto";
    }
      public function afficherDetails(){
    
    return "capaciteTonnage: $this->capaciteTonnage . immatriculation : $this->immatriculation . marque :$this->marque . modele: $this->modele .  prixJour :$this->prixJour . disponible: $this->disponible";
    
  }
//       public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;{
    
//   }



}

abstract class Personne {
  
  protected $nom;
  protected $prenom;
  protected $email;

  
  public function __construct($nom,$prenom,$email){
    
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    
  }
  
  abstract public function afficherProfil();
  
}

class Client extends Personne {
  
    protected $numeroClient;
    protected $reservations=[];
  
  public function __construct($nom,$prenom,$email){
    
    parent::__construct($nom,$prenom,$email);
    
    
  }
  
  public function afficherDetails(){
    
    return "nom: $this->nom . prenom: $this->prenom . email: $this->email";
    
  }
 public function ajouterReservation(Reservation $r){
    $this->reservations[] = $r;
  }
  public function afficherProfil(){

    return "nom: $this->nom . prenom: $this->prenom . email: $this->email";
  }

  public function getHistorique(){
    return $this->reservations;
  }
}

class Agence{

protected $nom;
protected $ville;
protected $vehicules=[];
protected $clients;

public function ajouterVehicule(Vehicule $v){
    $this->vehicules[]=$v;
}
public function rechercherVehiculeDisponible(string $type){


}

public function enregistrerClient(Client $c){
    $this->clients[]=$c;
}

public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation{

}

}
class Reservation{

    protected $vehicule;
    protected $client;
    protected $dateDebut;
    protected $nbJours;
    protected $statut;

    public function __construct(Vehicule $vehicule, Client $client, DateTime $dateDebut, int $nbJours, $statut) {
        $this->vehicule = $vehicule;
        $this->client = $client;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = $statut;
    }

    public function calculerMontant() {
        return $this->vehicule->calculerPrix($this->nbJours);
    }

    public function confirmer(){
        $this->statut;
    }

    public function annuler() {
        $this->statut ;
    }

}


?>

