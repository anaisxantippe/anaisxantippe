<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;les noms ne sont pas rangés dans l'ordre alphabétique&quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param nbDecimales="8" maxBoucle="500000" totalBoucles="5000000" arrondiAuto="vrai" epaisseurLigne="2" epaisseurPoint="2" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#n" algoitem="n EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#i" algoitem="i EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#t" algoitem="t EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#n#pasliste" algoitem="LIRE n"/>
        <item code="2#i#pasliste" algoitem="LIRE i"/>
        <item code="2#t#pasliste" algoitem="LIRE t"/>
        <item code="6#n&lt;i et i&lt;t" algoitem="SI (n&lt;i et i&lt;t) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#les noms sont rangés dans l'ordre alphabétique#1" algoitem="AFFICHER &quot;les noms sont rangés dans l'ordre alphabétique&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#les noms ne sont pas rangés dans l'ordre alphabétique#1" algoitem="AFFICHER &quot;les noms ne sont pas rangés dans l'ordre alphabétique&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
