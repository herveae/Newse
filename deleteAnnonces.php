<?php
include_once("DBconnexion.php");
$pdo = new connect();  

if(!empty($_GET["id"])){
    $query="delete from annonces where id_annonces=:id";
    $objstmt=$pdo->prepare($query);
    $objstmt->execute(["id"=>$_GET["id"]]);
    $objstmt->closeCursor();
    header("Location:gestionAnnonces.php");
}  
?>