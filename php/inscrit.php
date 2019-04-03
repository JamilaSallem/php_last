<?php
//inclure un fichier
include "config.php";

//appel fonction
$base=connect();

//récupération des donnés
$e=$_REQUEST['email'];//il cherche l'input du fichier html ayant le nom 'email' et récupère sa valeur
$m=$_REQUEST['mdp'];

$mdpc=md5($m);//md5 permet de crypter le mdp toujours de la meme methode

$req="INSERT INTO users (id,email,password) VALUES(null,'$e','$mdpc')";//les cotes parce que nous allons inserer les variables dans une chaine
//exec est la fonction qui fait l'execution de la requete//elle fonctionne avec INSERT,UPDATE et DELETE
//type de retour de l'exec est soit int soit bool
//elle retourne une variable int contient le nbre de lignes insérées si la requete s'est correctement exécutés
//elle retourne une variable bool cotenant la valeur false en cas d'echec

$resp=$base->exec($req);//la fonction exec va executer la requete $req sur la base $base et son resultat sera affecté à la variable $resp

if ($resp==1){//1:nbre de lignes que j'ai inséré
    echo "Données insérées avec succès";
}
else{
    echo "Vérifier la requete ou le fichier config";
}

?>