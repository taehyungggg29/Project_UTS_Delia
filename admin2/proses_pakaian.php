<?php 
   require_once 'db_toko_pakaian.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_stok = $_POST['warna'];
   $_harga = $_POST['harga'];
   $_tipe_pakaian_id = $_POST['tipe_pakaian_id'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id;
   $ar_data[]=$_nama; 
   $ar_data[]=$_ukuran;
   $ar_data[]=$_warna;
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;
   $ar_data[]=$_tipe_pakaian_id;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pakaian (id,nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pakaian SET id=?,nama=?,ukuran=?,warna=?,stok=?,harga=?,tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_pakaian.php');
?>