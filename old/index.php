<?php
/**
 * Created by PhpStorm.
 * User: CK7UP
 * Date: 11/5/17
 * Time: 16:46
 */
<?php>
//Boucle Tant que:

Tant qu''il ya une plaque de chocolat
{
    Detachez le carre de chocolat
}

// Condition:

Sors le plat.
    Si gourmad {
    casse 8 oeufs
}
sinon si regime{
    casse 4 oeufs
}
sinon {
    casse 6 oeufs
}

Bien melanger


// TP1: station d'essence
//affichage permanent
affiche 'Merci d''avoir choisi CK_OIL !'
Choisissez votre carburant :
Gazole, SuperSP ou GPL ?;
//Quand il ya un client
 Si carburant choisi
{
     recueillir carburant_choisi;
     Afficher 'Placez votre carte de credit';
    Tant que carte de credit non entree
    {
         Afficher 'Placez votre carte de credit';
    }
    sinon si
    {
         Afficher 'Entrez vos donnees + password';
        Tant que Donnees + password non entrees ou pas bons
        {
            Afficher 'Entrez vos donnees + password';
        }
            sinon si bons
        {
                Affciher 'Vous pouvez vous servir!'
                Afficher carburant_choisi;
        }
    }
 //Initialisation du nombre de litre de caburant a zero:
    nb_litre=0;
    //Lorsque le client decroche le pistolet
    si pistolet dechroche
    {
        si carburant_choisi="Gazole"
        {
            // on affiche le prix au litre
            afficher prix_litre=20;
        }
        sinon si carburant_choisi="SuperSP"
        {
            Afficher prix_litre=25;
        }
        sinon
        { //On affiche le choix par default soit le GPL
            Afficher prix_litre=15;
        }
        //Lorsque l'essence coule
        Tant que l''essence coule
        {
            nb_litre=nb_litre+1;
//On calcul le prix en temps reel:
            Somme_Actuelle=nb_litre * prix_litre;
            Affciher Somme_Actuelle;
        }
        //Apres avoir fait le plein de son reseroir, on affiche le prix total et on fait un retrait de la somme total sur la carte de bancaire
    sinon
        {
            afficher Prix_total=Somme_Actuelle;
            Efecetuer le payement par carte bancaire;
        }
    }
    Afficher 'Merci de votre visite !'

}
?>