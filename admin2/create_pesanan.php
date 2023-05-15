<?php 
require_once 'db_toko_pakaian.php';
include_once 'tamplates/header.php';
include_once 'tamplates/sidebar.php';
include_once 'tamplates/topbar.php';
?>
            
<form method="POST" action="proses_pesanan.php">
  
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
        value=""> 
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
        <input id="nama" nama="nama" type="text" class="form-control"  
        value=""> 
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
        <input id="pakaian_id" name="pakaian_id" type="text" class="form-control"  
        value=""> 
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
        value=""> 
      </div> 
    </div> 
  </div> 
   
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
<?php
include_once 'tamplates/footer.php';
?>