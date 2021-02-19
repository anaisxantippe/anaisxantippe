// A partir de la saisie du prix unitaire noté PU d'un produit et de la quantité commandée QTECOM, afficher le prix à payer PAP, en détaillant la remise REM et le port PORT, sachant que :
// TOT = ( PU * QTECOM )
// la remise est de 5% si TOT est compris entre 100 et 200 € et de 10% au-delà
// le port est gratuit si le prix des produits ( le total remisé ) est supérieur à 500 €. Dans le cas contraire, le port est de 2%
// la valeur minimale du port à payer est de 6 €
// Testez tous les cas possibles afin de vous assurez que votre script fonctionne.
// 
// Ci-dessous, un jeu de tests :
// - Saisir 600 € et quantité = 1 : remise 10% (-60 €) soit 540,00 et frais port = 0; à payer : 540 €
// - Saisir 501 € et quantité = 1 : remise 10% (-50,1 €) soit 450,90 et frais port 2% (de 450,90 €) soit +9,01 € ; à payer : 450,90+9.01 = 459,91 €.
// - Saisir 100 € et quantité = 2 : 200 € donc remise 5% soit 190 € et frais de port 2% soit 3,8 € mini 6 €; à payer : 190+6 = 196 €
// - Saisir 3 € et quantité = 1 : remise 0, frais de port 2% soit 0.06 € donc le minimum de 6 € s'applique; à payer : 3+6 = 9 €
var pu = window.prompt("Entrez le prix unitaire du produit :"); //prix unitaire
var qtecom = window.prompt("Entre la quantité de produits que vous souhaitez acheter :"); //quantité commandée
var pap; //prix à payer
var tot = pu*qtecom; // prix de la commande hors frais de port et remise
var rem;
var port;
if (tot<100) { //SI le total du panier est à moins de 100€, le client n'a pas de réduction
    pap = tot
} else if (tot<=200 && tot>=100) { //SI le total du panier est compris entre 100 et 200€, ALORS le client profite d'une réduction de 5%
    rem = tot*0.05
    tot = tot-rem
} else { //lorsque le prix n'est pas compris entre 0 et 200€, ALORS le client bénéficie d'une réduction de 10%
    rem = tot*0.1
    tot = tot-rem
} if (tot<500) { //SI le total réduit que le client doit payer est inférieur à 500€, il paiera des frais de port à hauteur de 2% du prix total réduit
    port = tot*0.02
    pap = tot+port
} else { //lorsque le total réduit est supérieur à 500€, ALORS les frais de ports seront offerts
    pap = tot
} if (port<6) { //si les frais de ports de la commande auraient été inférieurs à 6€, on les fixe à 6€ manuellement
    pap = tot+6
}
document.write("Votre total est de :" + pap + "€.") //appelle la page html pour y écrire le prix total du panier, avec réduction et frais de ports s'il y a.