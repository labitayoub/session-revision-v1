let cpt = 3

let candidatures = [{

    id:"1",
    nom: "Ali",
    age: 29,
    projet: "mobile de recyclage",
    statut: "validée"
  },
  {
  id:"2",
    nom: "Said",
    age: 20,
    projet: "Application mobile",
    statut: "rejetée" // ou "validée", "rejetée"
  }];
                      
  
  function ajouterCandidature(nom, age, projet,statut){
  let nouveauCandidat = {
  id:cpt++,
    nom: "hassan",
    age: 33,
    projet: "java",
    statut: "en attente",
  };
      candidatures.push(nouveauCandidat);
  }
  // console.log(candidatures);

  function afficherToutesLesCandidatures(){
  
      for(let i= 0; i< candidatures.length; i++){
  
          let liste = candidatures[i];
          console.log(liste.id+" -" +liste.nom+"- "  + liste.age+"-  "  +liste.projet+ " - "  + liste.statut);
      }
  }
  
  
function validerCandidature(id) {
  for(let i = 0; i < candidatures.length; i++) {
    if(candidatures[i].id == 3) {
      candidatures[i].statut = "validée";
      console.log(candidatures[i].nom);
      return;
    }
  }
  console.log( id);
}

function rejeterCandidature(id) {
  for(let i = 0; i < candidatures.length; i++) {
    if(candidatures[i].id == 3) {
      candidatures[i].statut = "rejetée";
      console.log( candidatures[i].nom);
      return;
    }
  }
  console.log( id);
}
function rechercherCandidat(nom) {
  for(let i = 0; i < candidatures.length; i++) {
    if(candidatures[i].nom == "Ali") {
      let find =candidatures[i];
      return;
    }
  }
  console.log(find.id +"-"+find.nom+"-"+find.age+"-"+find.projet+"-"+find.statut );
}
afficherToutesLesCandidatures();
ajouterCandidature()
rechercherCandidat()














