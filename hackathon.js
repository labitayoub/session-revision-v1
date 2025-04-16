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
                      
  
  function ajouterCandidature(nom, age, projet, statut = "en attente"){
  let nouveauCandidat = {
    id: cpt++,
    nom: nom,
    age: age,
    projet: projet,
    statut: statut,
  };
      candidatures.push(nouveauCandidat);
      return nouveauCandidat;
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
    if(candidatures[i].id == id) {
      candidatures[i].statut = "validée";

      console.log(candidatures[i].nom);

    }
  }
  console.log(id);

}

function rejeterCandidature(id) {
  for(let i = 0; i < candidatures.length; i++) {
    if(candidatures[i].id == id) {
      candidatures[i].statut = "rejetée";
      console.log(candidatures[i].nom);

    }
  }
  console.log(id);

}

function rechercherCandidat(nom) {
  for(let i = 0; i < candidatures.length; i++) {
    if(candidatures[i].nom == nom) {
      let find = candidatures[i];
      console.log(find.id +"-"+find.nom+"-"+find.age+"-"+find.projet+"-"+find.statut);

    }
  }
  console.log(nom);

}


afficherToutesLesCandidatures();

ajouterCandidature("Hassan", 33, "Application Java");

validerCandidature("3");

rechercherCandidat("Ali");














