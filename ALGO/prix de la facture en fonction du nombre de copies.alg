<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="SI (nombre_copies>20) ALORS" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2etat="inactif" F2para="" F2defaut=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#nombre_copies" algoitem="nombre_copies EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#pu_copie" algoitem="pu_copie EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#nombre_copies#pasliste" algoitem="LIRE nombre_copies"/>
        <item code="6#nombre_copies&lt;=10" algoitem="SI (nombre_copies&lt;=10) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#pu_copie#0.10#pasliste" algoitem="pu_copie PREND_LA_VALEUR 0.10"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#nombre_copies>10 ET nombre_copies&lt;=20" algoitem="SI (nombre_copies>10 ET nombre_copies&lt;=20) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#pu_copie#0.09#pasliste" algoitem="pu_copie PREND_LA_VALEUR 0.09"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#nombre_copies>20" algoitem="SI (nombre_copies>20) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#pu_copie#0.08#pasliste" algoitem="pu_copie PREND_LA_VALEUR 0.08"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="20#nombre_copies*pu_copie#1" algoitem="AFFICHERCALCUL nombre_copies*pu_copie"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
