<H5 style="color: grey;">Report</H5>

<form action="index.php?r=report/prosesunduh" method="post">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
            <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Line Proses</label>
                    <select class="form-control" name="lineproses" required>
                        <option value="all">All</option>
                        <?php
                                $query= Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE is_active = '1'")->queryAll();
                                $array=array();
                                foreach($query as $row){
                        ?>
                        <option value="<?php echo $array[]=$row['code_master_proses']; ?>"><?php echo $array[]=$row['keterangan_master_proses']; ?></option>
                        <?php } ?>
                        
                    </select>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlSelect1">Tanggal Awal</label>
                        
                        <div class="row">
                            <div class="datepicker date input-group">
                                <input type="text" placeholder="Choose Date" class="form-control" name="tglawal">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="input-group"><input type="text" class="form-control col-sm-3" name="jamawal"></div>
                            
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlSelect1">Tanggal Akhir</label>
                        <div class="row">
                        <div class="datepicker2 date input-group">
                            <input type="text" placeholder="Choose Date" class="form-control" name="tglakhir">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="input-group"><input type="text" class="form-control col-sm-3" name="jamakhir"></div>
                        </div>
                        
                    </div>
                  </div>
                </div>
            </div>
            
            <button class="btn btn-primary mr-2">Download</button>
      </div>
    </div>
</div>
</form>

 

    
    