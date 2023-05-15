<?php  
    require_once 'db_toko_pakaian.php';
    include_once 'tamplates/header.php';
    include_once 'tamplates/sidebar.php';
    include_once 'tamplates/topbar.php'; 
?> 
<?php 
    $_id = $_GET['id']; 
    
    $sql = "SELECT * FROM pakaian WHERE id=?"; 
    $st = $dbh->prepare($sql); 
    $st->execute([$_id]); 
    $row = $st->fetch(); 
   
?> 
 
<table class="table table-striped"> 
    <tbody> 
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr> 
        <tr>  <td>Nama</td><td><?=$row['nama']?></td></tr>
        <tr>  <td>Ukuran</td><td><?=$row['ukuran']?></td></tr> 
        <tr>  <td>Warna</td><td><?=$row['warna']?></td></tr> 
        <tr>  <td>Stok</td><td><?=$row['stok']?></td></tr>  
        <tr>  <td>Harga</td><td><?=$row['harga']?></td></tr>  
        <tr>  <td>Tipe_Pakaian_id</td><td><?=$row['tipe_pakaian_id']?></td></tr>  
         
         
    </tbody> 
</table>

<?php 
require_once 'tamplates/footer.php'; 
?>