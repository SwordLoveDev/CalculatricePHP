<?php

// Code by Nxstro Stress

$nombre1 = (float)readline('[+] Entrez votre premier nombre : '); // vraiable rentrer par l'utilisateur qui sera un float pour gérer les nombre à virgule.
$choix = readline('[+] Entrez votre opérateur (+, -, *, /): '); // vraiable rentrer par l'utilisateur qui sera un str pour définir le calcul qui souhaite éxécuter.
$nombre2 = (float)readline('[+] Entrez votre deuxieme nombre : '); // vraiable rentrer par l'utilisateur qui sera un float pour gérer les nombre à virgule.


if($nombre1 != NULL AND $nombre2 != NULL) // Condition qui permet de vérifier si les deux champs sont renseignées sinon un message d'erreur apparait.
{
    if($choix == "/" AND $nombre2 == 0) // Simple vérification pour la division.
    {
        echo '--> On peut pas diviser par 0 !';
    }
    else
    {  
        if($choix == "+") // Condition qui permet d'éxécuter le calcul selon l'entrer de l'utilisateur.
        {
        $resultat = $nombre1 + $nombre2; // Exécution du calcul avec les nombres rentrée par l'utilisateur.
        echo "--> $nombre1 + $nombre2 = $resultat\r\n"; // Affichage du calcul et du résultat.
        echo '--> La somme de ces deux nombres est '.$resultat;
        }
         
        if($choix == "-") 
        {
        $resultat = $nombre1 - $nombre2; 
        echo "--> $nombre1 - $nombre2 = $resultat\r\n";
        echo '--> La différence de ces deux nombres est '.$resultat; 
        }
         
        if($choix == "*")
        {  
        $resultat = $nombre1 * $nombre2;
        echo "--> $nombre1 * $nombre2 = $resultat\r\n";
        echo '--> Le produit de ces deux nombres est '.$resultat;
        }
     
        if($choix == "/")
        {
        $resultat = $nombre1 / $nombre2;
        echo "--> $nombre1 / $nombre2 = $resultat\r\n";
        echo '--> Le quotient de ces deux nombres est '.$resultat;
        }
    }
    }
else 
{
echo '--> Vous avez oublier de renseigner tous les champs.';
}
