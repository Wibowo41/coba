<H5 style="color: grey;">Transaksi / Rework</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
            <input type="hidden" id="kategori" value="20">
            <div class="row">
                
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" name="status" id="status" style="background-color: #FFF0F5;">
                      <option value=""></option>
                      <option value="IN">IN</option>
                      <option value="OUT">OUT</option>
                    </select>
                    </div>
                </div>
                </div>
                
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Identifikasi</label>
                    <select class="form-control" name="status" id="identifikasi" style="background-color: #FFF0F5;">
                      <option value=""></option>
                      <?php
                        $query= Yii::app()->db->createCommand("SELECT * FROM master_kategori_identifikasi mki LEFT JOIN master_identifikasi mi ON mki.kode_identifikasi = mi.kode_identifikasi WHERE mki.kode_kategori = 'RW'")->queryAll();
                        $array=array();
                        foreach($query as $row){
                      ?>
                      <option value="<?php echo $array[]=$row['kode_identifikasi']; ?>"><?php echo $array[]=$row['nama_identifikasi']; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                </div>
                </div>
                
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Checker</label>
                    <select class="form-control" name="pic" id="pic" style="background-color: #FFF0F5;">
                      <option value=""></option>
                      <?php
                        $qc= Yii::app()->db->createCommand("SELECT * FROM master_checker")->queryAll();
                        $array=array();
                        foreach($qc as $rowc){
                      ?>
                      <option value="<?php echo $array[]=$rowc['nama_checker']; ?>"><?php echo $array[]=$rowc['nama_checker']; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Sales Order</label>
                            <input type="text" name="salesorder" class="form-control" placeholder="Sales Order" id="salesorder">
                        </div>
                    </div> 
                </div>
                
                <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Working Order</label>
                    <select class="form-control" name="workingorder" id="workingorder">
                      <option value=""></option>
                      <?php
                        $qc= Yii::app()->db->createCommand("SELECT * FROM master_wo WHERE is_active = '1'")->queryAll();
                        $array=array();
                        foreach($qc as $rowc){
                      ?>
                      <option value="<?php echo $array[]=$rowc['nama_wo']; ?>"><?php echo $array[]=$rowc['nama_wo']; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                </div>
                </div>
            </div>
            
            <hr/>
            <h4 class="card-title">Scan form</h4>
            <div class="row">
                <div class="col-md-3">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlSelect1">Model</label>
                        <input type="text" name="model" id="scannmodel" class="form-control" placeholder="Model">
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Quantity</label>
                    <input type="text" name="qty" id="scannqty" class="form-control" placeholder="Quantity">
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Keterangan</label>
                    <input type="text" name="ket" id="ket" class="form-control" placeholder="Keterangan">
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlSelect1">Bagian / Proses</label>
                        <span style="color: green; display: none;" id="labelbagian"></span>
                        <input type="text" name="bagian" id="scannbagian" class="form-control" placeholder="Bagian / Proses">
                    </div>
                  </div>
                </div>
            </div>
            
            <button class="btn btn-primary mr-2" id="submittransaksinonok">Submit</button>
      </div>
    </div>
</div>
<?php
$crntdate= date("Y-m-d");
function getHari($date){
 $datetime = DateTime::createFromFormat('Y-m-d', $date);
  $day = $datetime->format('l');
 switch ($day) {
  case 'Sunday':
   $hari = 'Minggu';
   break;
  case 'Monday':
   $hari = 'Senin';
   break;
  case 'Tuesday':
   $hari = 'Selasa';
   break;
  case 'Wednesday':
   $hari = 'Rabu';
   break;
  case 'Thursday':
   $hari = 'Kamis';
   break;
  case 'Friday':
   $hari = 'Jum\'at';
   break;
  case 'Saturday':
   $hari = 'Sabtu';
   break;
  default:
   $hari = 'Tidak ada';
   break;
 }
 return $hari;
}
?>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data</h4>
                  <p class="card-description">
                    <?php echo getHari($crntdate).", "; ?> <code><?php echo date("d-m-Y")?></code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>Model</th>
                          <th>Status</th>
                          <th>Kategori</th>
                          <th>Identifikasi</th>
                          <th>Bagian</th>
                          <th>Sales Order</th>
                          <th>QTY</th>
                          <th>Checker</th>
                          <th>Jam</th>
                        </tr>
                        </thead>
                      <tbody>
                        <?php
                            $query= Yii::app()->db->createCommand("SELECT * FROM transaksi tr LEFT JOIN master_identifikasi mi ON tr.identifikasi = mi.kode_identifikasi LEFT JOIN master_bagian mb ON tr.bagian_proses = mb.code_master_proses WHERE DATE(tr.waktu_transaksi) = CURRENT_DATE AND tr.kategori = 'RW' ORDER BY tr.id_transaksi DESC")->queryAll();
                            $array=array();
                            foreach($query as $row){
                        ?>
                        <tr>
                            <td><?php echo $array[]=$row['model']; ?></td>
                            <td><?php echo $array[]=$row['status']; ?></td>
                            <td>
                                <?php
                                    if($array[]=$row['kategori'] == "OK"){
                                        echo 'OK';
                                    } else if($array[]=$row['kategori'] == "RW"){
                                        echo 'REWORK';
                                    } else if($array[]=$row['kategori'] == "RJRG"){
                                        echo 'REJECT REGULER';
                                    } else if($array[]=$row['kategori'] == "RJRW"){
                                        echo 'REJECT REWORK';
                                    } else if($array[]=$row['kategori'] == "RJFB"){
                                        echo 'REJECT FEEDBACK';
                                    } 
                                ?>
                            </td>
                            <td><?php echo $array[]=$row['nama_identifikasi']; ?></td>
                            <td><?php echo $array[]=$row['keterangan_master_proses']; ?></td>
                            <td><?php echo $array[]=$row['sales_order']; ?></td>
                            <td><?php echo $array[]=$row['qty']; ?></td>
                            <td><?php echo $array[]=$row['pic']; ?></td>
                            <td><label class="badge badge-warning"><?php echo date('H:i', strtotime($array[]=$row['waktu_transaksi'])); ?></label></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


 

    