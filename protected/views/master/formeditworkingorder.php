
<?php
if (isset($_GET['auth'])){
    
$idwo = $this->base64_decrypt($_GET['auth'], $this->key());

$query= Yii::app()->db->createCommand("SELECT * FROM master_wo WHERE id_wo = '$idwo'")->queryAll();

$array=array();
foreach($query as $row){
?>
<H5 style="color: grey;">Master / Working Order</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/proseseditworkingorder" method="post">
<input type="hidden" name="auth" value="<?php echo $_GET['auth']; ?>">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Working Order</label>
                            <input type="text" value="<?php echo $array[]=$row['nama_wo']; ?>" name="workingorder" class="form-control" placeholder="Working Order" readonly="true">
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Keterangan Working Order</label>
                            <input type="text" value="<?php echo $array[]=$row['keterangan_wo']; ?>" name="keteranganwo" class="form-control" placeholder="Keterangan Working Order">
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


 

    