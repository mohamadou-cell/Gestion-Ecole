<?php
include("Connection_dba.php");
// récupérer les données du formulaire en utilisant la valeur des attributs name comme clé   
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$adresse=$_POST["adresse"];
$email=$_POST["email"];
$nom_tuteur=$_POST["nom_tuteur"];
$telephone_tuteur=$_POST["telephone_tuteur"];
$date_naissance=$_POST["date_naissance"];
$nationalite=$_POST["nationalite"];
$genre=$_POST["genre"]; 

$eleve = $source->prepare("INSERT INTO INSCRIPTION (prenom, nom, adresse, email, nom_tuteur,telephone_tuteur,date_naissane, nationalite,genre)
VALUES(:prenom, :nom,:adresse, :email, :nom_tuteur, :telephone_tuteur, :date_naissance,:nationalite,:genre)");
$eleve->bindParam(':prenom',$prenom);
$eleve->bindParam(':nom',$nom );
$eleve->bindParam(':adresse',$adresse);
$eleve->bindParam(':email',$email);
$eleve->bindParam(':nom_tuteur',$nom_tuteur);
$eleve->bindParam(':telephone_tuteur',$telephone_tuteur);
$eleve->bindParam(':date_naissance',$date_naissance);
$eleve->bindParam(':nationalite',$nationalite);
$eleve->bindParam(':genre',$genre);
$eleve->execute();
echo "Enrigistrement effectuer";
?>