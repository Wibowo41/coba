<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="css/boostrapdatepicker.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="js/jquery.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        $id=Yii::app()->user->id;
        if(isset($id)) {
    ?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo-pt.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-pt.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">

        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
             <a class="nav-link dropdown-toggle" href="index.php?r=site/logout" id="profileDropdown">
                Logout
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item" style="background-color: #7B68EE;">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <?php if(Yii::app()->user->isAdmin()) { ?>
          <li class="nav-item" style="background-color: #4b49ac;">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon" style="color: white;"></i>
                <span class="menu-title" style="color: white;">Master</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/user">User</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/proses">Bagian/Proses</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/identifikasi">Identifikasi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/kategori">Kategori</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/workingorder">Working Order</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=master/checker">Checker</a></li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item" style="backgrsound-color: #4b49ac;">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon" style="color: white;"></i>
                <span class="menu-title" style="color: white;">Transaksi</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/okreguler">OK Reguler</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/okrework">OK Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rework">Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectreguler">Reject Reguler</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectrework">Reject Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectfeedback">Reject Feedback</a></li>
                </ul>
              </div>
            </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=result">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Result Detail</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=resultakumulasi">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Result Akumulasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=report">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title"> Report</span>
            </a>
          </li>
          
          <?php } else { ?>
          <li class="nav-item" style="background-color: #4b49ac;">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon" style="color: white;"></i>
                <span class="menu-title" style="color: white;">Transaksi</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/okreguler">OK Reguler</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/okrework">OK Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rework">Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectreguler">Reject Reguler</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectrework">Reject Rework</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?r=transaksi/rejectfeedback">Reject Feedback</a></li>
                </ul>
              </div>
            </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=result">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Result Detail</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=resultakumulasi">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Result Akumulasi</span>
            </a>
          </li>
          <?php }?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?php echo $content; ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
  <?php
    } else {
        echo $content; 
    }
  ?>
   <!-- BARCODE READER -->
  <script>
    $(document).ready(function(){
        $(document).on('click', '#submittransaksiok', function(){
                
            var status = document.getElementById("status").value;
            var pic = document.getElementById("pic").value;
            var salesorder = document.getElementById("salesorder").value;
            var workingorder = document.getElementById("workingorder").value;
            var model = document.getElementById("scannmodel").value;
            var scannqty = document.getElementById("scannqty").value;
            var ket = document.getElementById("ket").value;
            var scannbagian = document.getElementById("scannbagian").value;
            var kategori = document.getElementById("kategori").value;
            var identifikasi = "";
            
            if(status == "" || pic == "" || salesorder == "" || workingorder == "" || model == "" || scannqty == "" || scannbagian == "" || kategori == ""){
                Swal.fire({
                    title: 'Masih Ada Data Yang Belum Terisi, Lengkapi Data Sebelum Menyimpan',
                    icon: 'warning',
                    confirmButtonText: 'Close',
                });
            } else {
                prosescreate(status,pic,salesorder,workingorder,model,scannqty,ket,scannbagian,kategori,identifikasi);
            }
        });
        
        $(document).on('click', '#submittransaksinonok', function(){
            var status = document.getElementById("status").value;
            var pic = document.getElementById("pic").value;
            var salesorder = document.getElementById("salesorder").value;
            var workingorder = document.getElementById("workingorder").value;
            var model = document.getElementById("scannmodel").value;
            var ket = document.getElementById("ket").value;
            var scannqty = document.getElementById("scannqty").value;
            var scannbagian = document.getElementById("scannbagian").value;
            var kategori = document.getElementById("kategori").value;
            var identifikasi = document.getElementById("identifikasi").value;
            
            if(status == "" || pic == "" || salesorder == "" || workingorder == "" || model == "" || scannqty == "" || scannbagian == "" || kategori == "" || identifikasi == ""){
                Swal.fire({
                    title: 'Masih Ada Data Yang Belum Terisi, Lengkapi Data Sebelum Menyimpan',
                    icon: 'warning',
                    confirmButtonText: 'Close',
                });
            } else {
                prosescreate(status,pic,salesorder,workingorder,model,scannqty,ket,scannbagian,kategori,identifikasi);
            }
        });
        
        function prosescreate(status,pic,salesorder,workingorder,model,scannqty,ket,scannbagian,kategori,identifikasi)
        {
            $.ajax({
                url:"index.php?r=transaksi/searchbagian",
                method:"POST",
                data:{codeproses:scannbagian},
                success:function(response){
                    var stat = $.parseJSON(response);
                    var statt = stat.hasil;
                    
                    if(statt == 0){
                        Swal.fire({
                            title: 'Barcode Bagian/Proses Tidak Ditemukan',
                            icon: 'warning',
                            confirmButtonText: 'Close',
                        });
                    } else {
                        $.ajax({
                            url:"index.php?r=transaksi/prosescreate",
                            method:"POST",
                            data:{status:status,pic:pic,salesorder:salesorder,workingorder:workingorder,model:model,qty:scannqty,ket:ket,bagian:scannbagian,kategori:kategori,identifikasi:identifikasi},
                            beforeSend: function(){
                                $(".page-loader").show();
                            },
                            success:function(data){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil menyimpan data',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload();
                                });
                            },
                            complete: function(){
                                $(".page-loader").hide();
                            }
                        });
                    }
                },
            });
        }
        
        $("#scannbagian").on("keypress", function(e){
            if(e.which === 13)
            {
                var codeproses = document.getElementById("scannbagian").value;
                $.ajax({
                    url:"index.php?r=transaksi/searchbagian",
                    method:"POST",
                    data:{codeproses:codeproses},
                    success:function(response){
                        var stat = $.parseJSON(response);
                        var statt = stat.hasil;
                        var namahasil = stat.namahasil;
                        
                        if(statt == 0){
                            document.getElementById("scannbagian").value = "";
                            Swal.fire({
                                title: 'Barcode Bagian/Proses Tidak Ditemukan',
                                icon: 'warning',
                                confirmButtonText: 'Close',
                            });
                            $('#scannbagian').val("").focus();
                            var idlabelbagian = document.getElementById("labelbagian");
                            idlabelbagian.style.display = "none";
                        } else {
                            var idlabelbagian = document.getElementById("labelbagian");
                            idlabelbagian.style.display = "inline";
                            idlabelbagian.innerHTML = namahasil;
                            document.getElementById("scannbagian").value = statt;
                            Swal.fire({
                                title: 'Lanjut Simpan Data ?',
                                text: "Tekan OK jika ingin melanjutkan simpan data",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'OK'
                              }).then((result) => {
                                  if (result.isConfirmed) {
                                    var status = document.getElementById("status").value;
                                    var pic = document.getElementById("pic").value;
                                    var salesorder = document.getElementById("salesorder").value;
                                    var workingorder = document.getElementById("workingorder").value;
                                    var model = document.getElementById("scannmodel").value;
                                    var scannqty = document.getElementById("scannqty").value;
                                    var ket = document.getElementById("ket").value;
                                    var scannbagian = document.getElementById("scannbagian").value;
                                    var kategori = document.getElementById("kategori").value;
                                    
                                    if(kategori == "10" || kategori == "15"){
                                        var identifikasi = "";
                                        if(status == "" || pic == "" || salesorder == "" || workingorder == "" || model == "" || scannqty == "" || scannbagian == "" || kategori == ""){
                                            Swal.fire({
                                                title: 'Masih Ada Data Yang Belum Terisi, Lengkapi Data Sebelum Menyimpan',
                                                icon: 'warning',
                                                confirmButtonText: 'Close',
                                            });
                                        } else {
                                            prosescreate(status,pic,salesorder,workingorder,model,scannqty,ket,scannbagian,kategori,identifikasi);
                                        }
                                    } else {
                                        var identifikasi = document.getElementById("identifikasi").value;
                                        if(status == "" || pic == "" || salesorder == "" || workingorder == "" || model == "" || scannqty == "" || scannbagian == "" || kategori == "" || identifikasi == ""){
                                            Swal.fire({
                                                title: 'Masih Ada Data Yang Belum Terisi, Lengkapi Data Sebelum Menyimpan',
                                                icon: 'warning',
                                                confirmButtonText: 'Close',
                                            });
                                        } else {
                                            prosescreate(status,pic,salesorder,workingorder,model,scannqty,ket,scannbagian,kategori,identifikasi);
                                        }
                                    }
                                  }
                            });
                        }
                    },
                });
            }
        });
        
        $("#scannmodel").on("keypress", function(e){
            if(e.which === 13)
            {
                document.getElementById("scannqty").value = 100;
                $('#scannbagian').val("").focus();
            }
        });
    });
    
    $(function () {
        $('.datepicker').datepicker({
          language: "es",
          autoclose: true,
          format: "dd-mm-yyyy"
        });
        
        $('.datepicker2').datepicker({
          language: "es",
          autoclose: true,
          format: "dd-mm-yyyy"
        });
    });
  </script>
   <!-- BARCODE READER -->
   
  <!-- plugins:js -->
   
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

