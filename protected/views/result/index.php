<div class="row">
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Filter
  </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
  <a class="btn btn-primary mr-2 searchresult"><i class="icon-search menu-icon"></i></a>
</div>

<div class="collapse" id="collapseExample">
    <div class="row">
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Model</label>
                <div class="input-group">
                    <input type="text" placeholder="Model" class="form-control" id="model">
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Tanggal Awal</label>
                <div class="datepicker date input-group">
                    <input type="text" placeholder="Choose Date" class="form-control" id="tglawal">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Tanggal Akhir</label>
                <div class="datepicker2 date input-group">
                    <input type="text" placeholder="Choose Date" class="form-control" id="tglakhir">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="status">
                    <option value="ALL">ALL</option>
                    <option value="IN">IN</option>
                    <option value="OUT">OUT</option>
                </select>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Bagian / Proses</label>
                <select class="form-control" id="bagian">
                    <option value="ALL">ALL</option>
                    <?php
                        $query_bagian= Yii::app()->db->createCommand("SELECT * FROM master_bagian")->queryAll();
                        $array=array();
                        foreach($query_bagian as $row_bagian){
                    ?>
                    <option value="<?php echo $array[]=$row_bagian['code_master_proses']; ?>"><?php echo $array[]=$row_bagian['keterangan_master_proses']; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="kategori">
                    <option value="ALL">ALL</option>
                    <option value="OKRG">OK Reguler</option>
                    <option value="OKRW">OK Rework</option>
                    <option value="RW">Rework</option>
                    <option value="RJRG ">Reject Reguler</option>
                    <option value="RJRW">Reject Rework</option>
                    <option value="RJFB">Reject Feedback</option>
                </select>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="exampleFormControlSelect1">Identifikasi</label>
                <select class="form-control" id="identifikasi">
                    <option value="ALL">ALL</option>
                    <?php
                        $query_identifikasi= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi ORDER BY nama_identifikasi ASC")->queryAll();
                        $array=array();
                        foreach($query_identifikasi as $row_identifikasi){
                    ?>
                    <option value="<?php echo $array[]=$row_identifikasi['kode_identifikasi']; ?>"><?php echo $array[]=$row_identifikasi['nama_identifikasi']; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Sort By</label>
                <select class="form-control" id="sortby">
                    <option value="10">Kategori</option>
                    <option value="20">Identifikasi</option>
                    <option value="30">Bagian</option>
                    <option value="40">Model</option>
                    <option value="50">Quantity</option>
                    <option value="60">Date & Time</option>
                </select>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <div class="form-group row">
            <div class="col-sm-12">
                    <label for="exampleFormControlSelect1">Sort</label>
                <select class="form-control" id="sort">
                    <option value="ASC">Ascending</option>
                    <option value="DESC">Descending</option>
                </select>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-loader">
            <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
        </div>
        <div class="table-responsive" id="pagination_data">
            
        </div>
      </div>
    </div>
</div>
<script src="ajax/pagination.js"></script>

    