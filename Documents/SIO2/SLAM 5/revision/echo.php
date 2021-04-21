<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon premier php</title>
</head>
<body>
 <?php
 //Ceci est un commentaire PHP sur une ligne
 /* Ceci est le 2ème type de commentaire PHP sur plusieurs lignes*/

 // On met la chaine de caractères "hello" dans la variable 'texte'
 // Les noms de variable commencent par $ en PHP
$texte= "hello world !";
//On ecrit le contenur de la variable 'texte' dans la page web
echo $texte;
?>


<?php
//Les chaine de caractères
$prenom = "Florent";
echo "Bonjour $prenom, \n ça farte ?";
//
// Autre exemple
echo 'Bonjour $prenom, \n ça farte ?';
?>

<?php
// Concaténation
$texte = "hello" . 'World !';
?>


<?php
 $coordonnees= array(
'prenom' => 'François',
'nom' => 'Dupont' );

echo $coordonnees['prenom'];
 ?>   
</body>
</html>