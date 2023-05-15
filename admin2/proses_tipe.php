<?php 
require_once 'db_toko_pakaian.php';
?>
<?php 
   $_id = $_POST['id'];
   $_tipe = $_POST['tipe'];
   
   

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_tipe; // ? 2
   $ar_data[]=$_proses;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe (id,tipe) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE tipe SET id=?,tipe=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_tipe.php');
?>