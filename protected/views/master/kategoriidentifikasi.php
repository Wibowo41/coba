<?php
if(isset($_GET['auth'])){
$kodekategori = $this->base64_decrypt($_GET['auth'], $this->key());
if (isset($_GET['result'])){
    if($_GET['result'] == "10"){
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil menyimpan data',
                    showConfirmButton: false,
                    timer: 1000
                }).then((result) => {
                    window.location = "index.php?r=master/kategoriidentifikasi&auth=<?php echo $_GET['auth']; ?>";
                });
            });
        </script>
        <?php
    } else if($_GET['result'] == "20"){
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal menyimpan data',
                    text: 'Kategori Detail sudah ada',
                  }).then((result) => {
                    window.location = "index.php?r=master/kategoriidentifikasi&auth=<?php echo $_GET['auth']; ?>";
                });
            });
        </script>
        <?php
    } else if($_GET['result'] == "30"){
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil hapus data',
                  }).then((result) => {
                    window.location = "index.php?r=master/kategoriidentifikasi&auth=<?php echo $_GET['auth']; ?>";
                });
            });
        </script>
        <?php
    } else if($_GET['result'] == "40"){
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil ubah data',
                  }).then((result) => {
                    window.location = "index.php?r=master/kategoriidentifikasi&auth=<?php echo $_GET['auth']; ?>";
                });
            });
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal menyimpan data',
                    showConfirmButton: false,
                    timer: 1000
                }).then((result) => {
                    window.location = "index.php?r=master/kategoriidentifikasi&auth=<?php echo $_GET['auth']; ?>";
                });
            });
        </script>
        <?php
    }
}

if($kodekategori == 'RW'){
    $root = 'Rework';
} else if($kodekategori == 'OKRG'){
     $root = 'Oke Reguler';
} else if($kodekategori == 'OKRW'){
     $root = 'Oke Rework';
} else if($kodekategori == 'RJRW'){
     $root = 'Reject Rework';
} else if($kodekategori == 'RJRG'){
     $root = 'Reject Reguler';
} else if($kodekategori == 'RJFB'){
     $root = 'Reject Feedback';
} else {
    $root = '';
}
?>
<H5 style="color: grey;">Master / Identifikasi / <?php echo $root; ?></H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/prosescreatekategoriidentifikasi" method="post">
    <input type="hidden" name="auth" value="<?php echo $this->base64_encrypt($kodekategori, $this->key()) ?>">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Identifikasi</label>
                    <select class="form-control" name="identifikasi" required>
                        <?php
                            $query= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE is_active = 1")->queryAll();
                            $array=array();
                            foreach($query as $row){
                        ?>
                        <option value="<?php echo $array[]=$row['kode_identifikasi']; ?>"><?php echo $array[]=$row['nama_identifikasi']; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                </div>
        
            
            <button class="btn btn-primary mr-2">Submit</button>
      </div>
    </div>
</div>
</form>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Kategori Identifikasi</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>Kategori</th>
                          <th>Created Time</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                      <tbody>
                        <?php
                            $query= Yii::app()->db->createCommand("SELECT mi.nama_identifikasi, mki.created_time, mki.id_master_kategori_identifikasi FROM master_kategori_identifikasi mki RIGHT JOIN master_kategori mk ON mki.kode_kategori = mk.kode_kategori RIGHT JOIN master_identifikasi mi ON mki.kode_identifikasi = mi.kode_identifikasi WHERE mki.kode_kategori = '$kodekategori' AND mi.is_active = 1")->queryAll();
                            $array=array();
                            foreach($query as $row){
                        ?>
                        <tr>
                            <td>
                                <?php echo $array[]=$row['nama_identifikasi']; ?>
                            </td>
                            <td>
                                <label class="badge badge-warning"><?php echo date('d-m-Y', strtotime($array[]=$row['created_time'])); ?></label>
                                <label class="badge badge-warning"><?php echo date('H:i', strtotime($array[]=$row['created_time'])); ?></label>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-icon-text btn-sm" id="submitdelete" auth1="<?php echo $this->base64_encrypt($kodekategori, $this->key()); ?>" auth2="<?php echo $this->base64_encrypt($array[]=$row['id_master_kategori_identifikasi'], $this->key()); ?>">
                                    Delete
                                    <i class="ti-trash btn-icon-append"></i>                          
                                </a>
                            </td>
                            
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
?>

<script type="text/javascript">
$(document).on('click', '#submitdelete', function(){
    var id1 = $(this).attr('auth1');
    var id2 = $(this).attr('auth2');
    
    Swal.fire({
      title: 'Anda yakin ingin menghapus data ini?',
      showCancelButton: true,
      confirmButtonText: 'Ya',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "index.php?r=master/prosesdeletekategoriidentifikasi&auth1="+id1+"&auth2="+id2;
      } 
    });
});
</script>

 

    