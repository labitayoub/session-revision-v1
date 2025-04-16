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

}



?>

