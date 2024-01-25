<?php
include_once("DBconnexion.php");
$pdo = new connect();   
if(!empty($_GET["id"])){
    $query="delete from users where id_users=:id";
    $objstmt=$pdo->prepare($query);
    $objstmt->execute(["id"=>$_GET["id"]]);
    $objstmt->closeCursor();
    header("Location:gestionUsers.php");
}  
?>