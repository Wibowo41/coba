
<?php
if (isset($_GET['auth'])){
    
$iduser = $this->base64_decrypt($_GET['auth'], $this->key());

$query= Yii::app()->db->createCommand("SELECT * FROM users WHERE id = '$iduser'")->queryAll();

$array=array();
foreach($query as $row){
?>
<H5 style="color: grey;">Master / User</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/prosesedituser" method="post">
<input type="hidden" name="iduser" value="<?php echo $_GET['auth']; ?>">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Username</label>
                            <input type="text" value="<?php echo $array[]=$row['username']; ?>" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select class="form-control" name="level">
                      <?php
                        if($array[]=$row['level'] == '2'){
                            $keterangan_level = 'Admin';
                        } else if($array[]=$row['level'] == '3'){
                            $keterangan_level = 'Member';
                        } else {
                            $keterangan_level = '';
                        }
                      ?>
                      <option value="<?php echo $array[]=$row['level']; ?>"><?php echo $keterangan_level; ?></option>
                      <option value="2">Admin</option>
                      <option value="3">Member</option>
                    </select>
                    </div>
                </div>
                </div>
        
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Keterangan</label>
                            <input type="text" value="<?php echo $array[]=$row['keterangan']; ?>" name="keterangan" class="form-control" placeholder="Keterangan">
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


 

    