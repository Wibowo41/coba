
<?php
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
                    window.location = "index.php?r=master/identifikasi";
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
                    text: 'Kode Identifikasi sudah pernah dibuat',
                  }).then((result) => {
                    window.location = "index.php?r=master/identifikasi";
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
                    window.location = "index.php?r=master/identifikasi";
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
                    window.location = "index.php?r=master/identifikasi";
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
                    window.location = "index.php?r=master/identifikasi";
                });
            });
        </script>
        <?php
    }
}
?>
<H5 style="color: grey;">Master / Identifikasi</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/prosescreateidentifikasi" method="post">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Code Identifikasi</label>
                            <input type="text" name="code" class="form-control" placeholder="Code Identifikasi" required>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Nama Identifikasi</label>
                            <input type="text" name="namaidentifikasi" class="form-control" placeholder="Nama Identifikasi">
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
                  <h4 class="card-title">Data Identifikasi</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>Code Identifikasi</th>
                          <th>Nama Identifikasi</th>
                          <th>Created Time</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                      <tbody>
                        <?php
                            $query= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE is_active = 1")->queryAll();
                            $array=array();
                            foreach($query as $row){
                        ?>
                        <tr>
                            <td><?php echo $array[]=$row['kode_identifikasi']; ?></td>
                            <td><?php echo $array[]=$row['nama_identifikasi']; ?></td>
                            <td>
                                <label class="badge badge-warning"><?php echo date('d-m-Y', strtotime($array[]=$row['created_time'])); ?></label>
                                <label class="badge badge-warning"><?php echo date('H:i', strtotime($array[]=$row['created_time'])); ?></label>
                            </td>
                            <td>
                                <a href="index.php?r=master/formeditidentifikasi&auth=<?php echo $this->base64_encrypt($array[]=$row['id_identifikasi'], $this->key()); ?>" class="btn btn-dark btn-icon-text btn-sm">
                                    Edit
                                    <i class="ti-pencil btn-icon-append"></i>                          
                                </a>
                                
                                <!--<a class="btn btn-danger btn-icon-text btn-sm" id="submitdelete" auth="<?php //echo $this->base64_encrypt($array[]=$row['id_identifikasi'], $this->key()); ?>">
                                    Delete
                                    <i class="ti-trash btn-icon-append"></i>-->                        
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

<script type="text/javascript">
$(document).on('click', '#submitdelete', function(){
    var id = $(this).attr('auth');
    
    Swal.fire({
      title: 'Anda yakin ingin menghapus data ini?',
      showCancelButton: true,
      confirmButtonText: 'Ya',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "index.php?r=master/prosesdeleteidentifikasi&auth="+id;
      } 
    });
});
</script>

 

    