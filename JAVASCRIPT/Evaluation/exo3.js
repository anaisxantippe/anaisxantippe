// Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après.
// Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent, et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime.
// var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
// Bon, j'ai changé les prénoms pour la blague, mais le principe reste exactement le même.
// J'suis plutôt fière de ma blague alors sois pas trop dur avec moi s'il te plaît Laurent !
var myArray = [
    "Alexandre",
    "Fabien",
    "Juliette",
    "Noé",
    "Behzad",
    "Sana",
    "Anaïs",
    "Lucas",
    "Hocine",
    "Laurent",
  ];
  var prenom = window.prompt(
    "Choisissez quelle personne va partir en réorientation aujourd'hui parmi :\n- Alexandre\n- Fabien\n- Juliette\n- Noé\n- Behzad\n- Sana\n- Anaïs\n- Lucas\n- Hocine\n- Laurent"
  );
  if (myArray.includes(prenom)) { //vérifie si le prénom est bien présent dans la liste
    myArray.splice(myArray.indexOf(prenom), 1); //retire 1 élément à partir du prénom trouvé (donc retire le prénom trouvé)
    myArray.push(" "); //et remplace le prénom par un espace vide " "
    document.write("Vous avez réorienté quelqu'un, voici les stagiaires restants :\n");
    document.write(myArray); //donne la liste des prénoms restants
  } else if (prenom === null) { //si l'utilisateur appuie sur "annuler"
    window.alert("Ne vous défilez pas, on réoriente quelqu'un aujourd'hui !");
    location.reload(); //reload la page et le script
  } else if (prenom == "") { //si l'utilisateur laisse le champ vide
    window.alert("Ne vous défilez pas, on réoriente quelqu'un aujourd'hui !");
    location.reload(); //reload la page et le script
  } else { //si l'utilisateur entre un prénom qui n'est pas dans la liste
    window.alert("Ce stagiaire a déjà été réorienté hier, choisissez-en un autre");
    location.reload(); //reload la page et le script
  }