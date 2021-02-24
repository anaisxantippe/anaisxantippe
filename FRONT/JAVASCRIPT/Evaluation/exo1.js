// Il s'agit de dénombrer les personnes d'âge strictement inférieur à 20 ans, les personnes d'âge strictement supérieur à 40 ans et celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et 40 ans y compris).
// Le programme doit demander les âges successifs.
// Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté.
// Donnez le programme Javascript correspondant qui affiche les résultats.

      var age = 0;
      var jeune = 0;
      var adulte = 0;
      var vieux = 0;

      age = prompt("Entrez plusieurs âge compris entre 1 et 100 pour pouvoir trier les tranches d'âge, et entrez un nombre plus grand que 100 pour terminer:");
      if (age == null) {//si l'utilisateur clique sur annuler
        window.alert("Vous avez annulé.");
        location.reload(); //reload la page et le script
      } else {//si l'utilisateur écris 0 ou renvoie un champ vide, le script lui dit qu'il a entré un nombre incorrect
        if (age == 0) {
          window.alert("Vous avez entré un chiffre incorrect");
          location.reload(); //reload la page et le script
        } else { //dans ce else on définie les intitulés des tranches d'âges
          age = parseInt(age);
          if (age > 100) {
            vieux++;
          } else if (age < 20) {
            jeune++;
          } else {
            adulte++;
          }
          while (age < 100) {//si on entre 100, le script s'arrête
            age = parseInt(prompt("Entrez l'âge"));

            if (age < 20) {//ici on trie les âges
              jeune++;
            } else if (age >= 20 && age <= 40) {
              adulte++;
            } else {
              vieux++;
            }
          }
        }
      }
      alert(//on indique à l'utilisateur que les âges ont été triés et comment
        "Il y a " +
          jeune +
          " jeune(s), \n" +
          adulte +
          " adulte(s), et \n" +
          vieux +
          " vieux (apparemment à 40 ans on est vieux, pas très sympa ça...)"
      );