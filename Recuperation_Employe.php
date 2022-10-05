<?php
include("connection_bdEmploye");
/* ini_set("display_errors","1");
error_reporting(E_ALL); */
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$adresse=$_POST["adresse"];
$foction=$_POST["foction"];
$email=$_POST["email"];
$telephone=$_POST["telephone_employe"];
$sexe=$_POST["sexe"];
$nationalite=$_POST["nationalite"];
$envoyer=$_POST["envoyer"];
if(isset($envoyer)){
    if(empty($prenom));
    if(empty($nom));
    if(empty($adresse));
    if(empty($fonction));
    if(empty($email));
    if(empty($telephone));
    if(empty($sexe));
    if(empty($nationalite));
    include("connection.php");
    $sth=$pdo->prepare("insert into EMPLOYER(prenom,nom,adresse,fonction,email,telephone_employe,sexe,nationalite) values(?,?,?,?,?,?,?,?)");
    $sth->execute(array($prenom,$nom,$adresse,$fonction,$email,$telephone,$sexe,$nationalite));

}


?>