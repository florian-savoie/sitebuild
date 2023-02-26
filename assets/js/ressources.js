<script>
 



 // Définir les variables pour les gains journaliers des bâtiments
let ressourceor = <?= $getresource[0][1] ?>;
let ressourcepetrol = <?= $getresource[1][1] ?>;
let ressourceberium= <?= $getresource[2][1] ?>;
let ressourceelectricite = <?= $getresource[3][1] ?>;

// Définir la fréquence d'incrémentation en millisecondes
const incrementInterval = 5000; // 5 secondes

function incrementResources(ressourceor, ressourcepetrol, ressourceberium, ressourceelectricite) {
  // Incrémenter chaque ressource en fonction de son gain quotidien
  ressourceor += (<?= $getresource[0][1] ?> / 24 / 60 / 60) * incrementInterval / 1000;
  ressourcepetrol += (<?= $getresource[1][1] ?> / 24 / 60 / 60) * incrementInterval / 1000;
  ressourceberium += (<?= $getresource[2][1] ?> / 24 / 60 / 60) * incrementInterval / 1000;
  ressourceelectricite += (<?= $getresource[3][1] ?> / 24 / 60 / 60) * incrementInterval / 1000;

  // Afficher les ressources mises à jour
  console.log(ressourceor);
  console.log(ressourcepetrol);
  console.log(ressourceberium);
  console.log(ressourceelectricite);

  // Mettre à jour les éléments du DOM correspondants
  document.getElementById("ressourceor").innerHTML = Math.floor(ressourceor);
  document.getElementById("ressourcepetrol").innerHTML = Math.floor(ressourcepetrol);
  document.getElementById("ressourceberium").innerHTML = Math.floor(ressourceberium);
  document.getElementById("ressourceelectricite").innerHTML = "fddfffggfd";
}
incrementResources(ressourceor, ressourcepetrol, ressourceberium, ressourceelectricite);

/*
// Lancer l'incrémentation toutes les 5 secondes
setInterval(incrementResources, incrementInterval);*/
</script>