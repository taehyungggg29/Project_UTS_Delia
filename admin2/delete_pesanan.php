<?php 
require_once 'db_toko_pakaian.php'; 
$id = $_GET['id']; 
$sql = "DELETE FROM pesanan WHERE id= ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
header('location:index_pesanan.php'); 
 
?>