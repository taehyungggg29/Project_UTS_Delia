<?php 
require_once 'db_toko_pakaian.php';
include_once 'tamplates/header.php';
include_once 'tamplates/sidebar.php';
include_once 'tamplates/topbar.php';
?>
            
<form method="POST" action="proses_tipe.php">
  
  <div class="form-group row">
    <label for="tipe" class="col-4 col-form-label">Tipe</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tipe" name="tipe" type="text" class="form-control"  
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