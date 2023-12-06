
<?php
if (isset($_GET['auth'])){
    
$ididentifikasi = $this->base64_decrypt($_GET['auth'], $this->key());

$query= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE id_identifikasi = '$ididentifikasi'")->queryAll();

$array=array();
foreach($query as $row){
?>
<H5 style="color: grey;">Master / Identifikasi</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/proseseditidentifikasi" method="post">
<input type="hidden" name="auth" value="<?php echo $_GET['auth']; ?>">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Code Identifikasi</label>
                            <input type="text" value="<?php echo $array[]=$row['kode_identifikasi']; ?>" name="code" class="form-control" placeholder="Code Identifikasi" readonly="true">
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Nama Identifikasi</label>
                            <input type="text" value="<?php echo $array[]=$row['nama_identifikasi']; ?>" name="namaidentifikasi" class="form-control" placeholder="Nama Identifikasi">
                        </div>
                    </div>
                </div>
            
            <button class="btn btn-primary mr-2">Submit</button>
      </div>
    </div>
</div>
</form>
<?php }} else { ?>
<script type="text/javascript">
window.location = "index.php";
</script>
<?php } ?>


 

    