// Ecrivez une fonction qui affiche une table de multiplication.
// Votre fonction doit prendre un paramètre qui permet d'indiquer quelle table afficher.
// Par exemple, TableMultiplication(7) doit afficher :
// 1 x 7 = 7
// 2 x 7 = 14
// 3 x 7 = 21 ...
nombre=window.prompt("Quel table de multiplication souhaitez-vous afficher:","Saisir un entier ici");
table_multiplication(nombre);
function table_multiplication(nombre) //fonction définie
{
var i; //i = chiffres par lesquels le nombre entré par l'utilisateur sera multiplié
for (i=1; i<=10; i++) { //i est défini ici comme s'étendant de 1 à 10
    document.write(nombre+" x "+i+"="+nombre*i+"<br>"); }  // le résultat est donné     
}	