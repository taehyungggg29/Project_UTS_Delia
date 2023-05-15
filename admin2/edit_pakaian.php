<?php  
    require_once 'db_toko_pakaian.php';
    include_once 'tamplates/header.php';
    include_once 'tamplates/sidebar.php';
    include_once 'tamplates/topbar.php';
?> 

<?php 
$id = $_GET['id']; 
$sql = "SELECT * FROM pakaian WHERE id = ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
$hasil = $r->fetch(); 
?> 
             
<form method="POST" action="proses_pakaian.php"> 
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>"> 
  
  <div class="form-group row"> 
    <label for="id" class="col-4 col-form-label">Id</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="id" name="id" type="text" class="form-control"  
        value="<?php echo $hasil['id']; ?>"> 
      </div> 
    </div> 
  </div> 
  <div class="form-group row"> 
    <label for="nama" class="col-4 col-form-label">Nama</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="nama" name="nama" type="text" class="form-control"  
        value="<?php echo $hasil['nama']; ?>"> 
      </div> 
    </div> 
  </div> 
  <div class="form-group row"> 
    <label for="ukuran" class="col-4 col-form-label">Ukuran</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="ukuran" name="ukuran" type="text" class="form-control"  
        value="<?php echo $hasil['ukuran']; ?>"> 
      </div> 
    </div> 
  </div> 
  <div class="form-group row"> 
    <label for="warna" class="col-4 col-form-label">Warna</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="warna" name="warna" type="text" class="form-control"  
        value="<?php echo $hasil['warna']; ?>"> 
      </div> 
    </div> 
  </div> 
  
  <div class="form-group row"> 
    <label for="stok" class="col-4 col-form-label">Stok</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="stok" name="stok" type="number" class="form-control"  
        value="<?php echo $hasil['stok']; ?>"> 
      </div> 
    </div> 
  </div> 

  <div class="form-group row"> 
    <label for="harga" class="col-4 col-form-label">Harga</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="harga" name="harga" type="number" class="form-control"  
        value="<?php echo $hasil['harga']; ?>"> 
      </div> 
    </div> 
  </div> 

  <div class="form-group row"> 
    <label for="tipe_pakaian_id" class="col-4 col-form-label">Tipe_pakaian_Id</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="tipe_pakaian_id" name="tipe_pakaian_id" type="number" class="form-control"  
        value="<?php echo $hasil['tipe_pakaian_id']; ?>"> 
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