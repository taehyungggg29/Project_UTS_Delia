<?php 
require_once 'db_toko_pakaian.php'; 
$id = $_GET['id']; 
$sql = "DELETE FROM pakaian WHERE id= ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
header('location:index_pakaian.php'); 
 
?>