<?php  
    require_once 'db_toko_pakaian.php';
    include_once 'tamplates/header.php';
    include_once 'tamplates/sidebar.php';
    include_once 'tamplates/topbar.php'; 
?> 
<?php 
$id = $_GET['id']; 
$sql = "SELECT * FROM pesanan WHERE id = ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
$hasil = $r->fetch(); 
?> 
             
<form method="POST" action="proses_pesanan.php"> 
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>"> 
  
  <div class="form-group row"> 
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="tanggal" name="tanggal" type="date" class="form-control"  
        value="<?php echo $hasil['tanggal']; ?>"> 
      </div> 
    </div> 
  </div>
  <div class="form-group row"> 
    <label for="pakaian_id" class="col-4 col-form-label">Pakaian_id</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="pakaian_id" name="pakaian_id" type="number" class="form-control"  
        value="<?php echo $hasil['pakaian_id']; ?>"> 
      </div> 
    </div> 
  </div> 
  <div class="form-group row"> 
    <label for="quantity" class="col-4 col-form-label">Quantity</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="quantity" name="quantity" type="number" class="form-control"  
        value="<?php echo $hasil['quantity']; ?>"> 
      </div> 
    </div> 
  </div>
  <div class="form-group row"> 
    <div class="offset-4 col-8"> 
      <input type="submit" name="proses" type="submit"  
      class="btn btn-primary" value="Update"/> 
    </div> 
  </div> 
</form>
<?php
include_once 'tamplates/footer.php';
?>