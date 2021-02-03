<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;kys&quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2etat="inactif" F2para="" F2defaut=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#age" algoitem="age EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#temps_permis" algoitem="temps_permis EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#accident" algoitem="accident EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#annee_assurance" algoitem="annee_assurance EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#age#pasliste" algoitem="LIRE age"/>
        <item code="2#temps_permis#pasliste" algoitem="LIRE temps_permis"/>
        <item code="2#accident#pasliste" algoitem="LIRE accident"/>
        <item code="2#annee_assurance#pasliste" algoitem="LIRE annee_assurance"/>
        <item code="6#(age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance&lt;1)" algoitem="SI ((age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance&lt;1)) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Tarif rouge#1" algoitem="AFFICHER &quot;Tarif rouge&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="6#(age>=25) ET (temps_permis&lt;2) ET (accident==1) ET (annee_assurance&lt;1)" algoitem="SI ((age>=25) ET (temps_permis&lt;2) ET (accident==1) ET (annee_assurance&lt;1)) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#Tarif rouge#1" algoitem="AFFICHER &quot;Tarif rouge&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                    <item code="9#sinon" algoitem="SINON">
                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                        <item code="6#(age>=25) ET (temps_permis>=2) ET (accident==2) ET (annee_assurance&lt;1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident==2) ET (annee_assurance&lt;1)) ALORS">
                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                            <item code="4#Tarif rouge#1" algoitem="AFFICHER &quot;Tarif rouge&quot;"/>
                            <item code="8#finsi" algoitem="FIN_SI"/>
                            <item code="9#sinon" algoitem="SINON">
                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                <item code="6#(age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)" algoitem="SI ((age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)) ALORS">
                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                    <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                    <item code="9#sinon" algoitem="SINON">
                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                        <item code="6#(age>=25) ET (temps_permis&lt;2) ET (accident==1) ET (annee_assurance>=1)" algoitem="SI ((age>=25) ET (temps_permis&lt;2) ET (accident==1) ET (annee_assurance>=1)) ALORS">
                                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                            <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                            <item code="8#finsi" algoitem="FIN_SI"/>
                                            <item code="9#sinon" algoitem="SINON">
                                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                <item code="6#(age>=25) ET (temps_permis>=2) ET (accident==2) ET (annee_assurance>=1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident==2) ET (annee_assurance>=1)) ALORS">
                                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                    <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                                    <item code="9#sinon" algoitem="SINON">
                                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                        <item code="6#(age&lt;25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance&lt;1)" algoitem="SI ((age&lt;25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance&lt;1)) ALORS">
                                                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                            <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                                            <item code="8#finsi" algoitem="FIN_SI"/>
                                                            <item code="9#sinon" algoitem="SINON">
                                                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                <item code="6#(age>=25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance&lt;1)" algoitem="SI ((age>=25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance&lt;1)) ALORS">
                                                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                    <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                                                    <item code="9#sinon" algoitem="SINON">
                                                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                        <item code="6#(age>=25) ET (temps_permis>=2) ET (accident==1) ET (annee_assurance&lt;1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident==1) ET (annee_assurance&lt;1)) ALORS">
                                                                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                            <item code="4#Tarif orange#1" algoitem="AFFICHER &quot;Tarif orange&quot;"/>
                                                                            <item code="8#finsi" algoitem="FIN_SI"/>
                                                                            <item code="9#sinon" algoitem="SINON">
                                                                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                <item code="6#(age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)" algoitem="SI ((age&lt;25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)) ALORS">
                                                                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                                    <item code="4#Tarif vert#1" algoitem="AFFICHER &quot;Tarif vert&quot;"/>
                                                                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                                                                    <item code="9#sinon" algoitem="SINON">
                                                                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                        <item code="6#(age>=25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)" algoitem="SI ((age>=25) ET (temps_permis&lt;2) ET (accident&lt;1) ET (annee_assurance>=1)) ALORS">
                                                                                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                                            <item code="4#Tarif vert#1" algoitem="AFFICHER &quot;Tarif vert&quot;"/>
                                                                                            <item code="8#finsi" algoitem="FIN_SI"/>
                                                                                            <item code="9#sinon" algoitem="SINON">
                                                                                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                                <item code="6#(age>=25) ET (temps_permis>=2) ET (accident==1) ET (annee_assurance>=1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident==1) ET (annee_assurance>=1)) ALORS">
                                                                                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                                                    <item code="4#Tarif vert#1" algoitem="AFFICHER &quot;Tarif vert&quot;"/>
                                                                                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                                                                                    <item code="9#sinon" algoitem="SINON">
                                                                                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                                        <item code="6#(age>=25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance&lt;1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance&lt;1)) ALORS">
                                                                                                            <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                                                            <item code="4#Tarif vert#1" algoitem="AFFICHER &quot;Tarif vert&quot;"/>
                                                                                                            <item code="8#finsi" algoitem="FIN_SI"/>
                                                                                                            <item code="9#sinon" algoitem="SINON">
                                                                                                                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                                                <item code="6#(age>=25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance>=1)" algoitem="SI ((age>=25) ET (temps_permis>=2) ET (accident&lt;1) ET (annee_assurance>=1)) ALORS">
                                                                                                                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                                                                                                                    <item code="4#Tarif bleu#1" algoitem="AFFICHER &quot;Tarif bleu&quot;"/>
                                                                                                                    <item code="8#finsi" algoitem="FIN_SI"/>
                                                                                                                    <item code="9#sinon" algoitem="SINON">
                                                                                                                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                                                                                                                        <item code="4#kys#1" algoitem="AFFICHER &quot;kys&quot;"/>
                                                                                                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                                                                    </item>
                                                                                                                </item>
                                                                                                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                                                            </item>
                                                                                                        </item>
                                                                                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                                                    </item>
                                                                                                </item>
                                                                                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                                            </item>
                                                                                        </item>
                                                                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                                    </item>
                                                                                </item>
                                                                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                            </item>
                                                                        </item>
                                                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                                    </item>
                                                                </item>
                                                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                            </item>
                                                        </item>
                                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                                    </item>
                                                </item>
                                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                                            </item>
                                        </item>
                                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                                    </item>
                                </item>
                                <item code="11#finsinon" algoitem="FIN_SINON"/>
                            </item>
                        </item>
                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                    </item>
                </item>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
