<?php
try{
    $eleve=new PDO("mysql:host=localhost;dbname=oumy1","root","");
    $eleve->exec("CREATE TABLE Houss (id INT AUTO_INCREMENT PRIMARY KEY,nom varchar(50),prenom varchar(50))");
    echo "table creer";
}
catch(PDOException $gonar){
echo "erreur:" .$gonar->getMessage();
}
?>