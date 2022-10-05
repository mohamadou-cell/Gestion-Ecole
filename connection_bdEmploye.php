<?php
try {
    $pdo=new PDO("mysql:host=localhost;dbname=oumy1","root","");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>