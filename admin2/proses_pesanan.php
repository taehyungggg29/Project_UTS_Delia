<?php 
   require_once 'db_toko_pakaian.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_pakaian_id = $_POST['pakaian_id'];
   $_quantity = $_POST['quantity'];

 

   // array data
   $ar_data[]=$_tanggal; 
   $ar_data[]=$_pakaian_id;
   $ar_data[]=$_quantity;
   $ar_data[]=$_proses;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,pakaian_id,quantity,) VALUES (?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,pakaian_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_pesanan.php');
?>