<?php 
	if(Yii::app()->user->isAdmin()) $this->renderPartial('/MenuAdmin/index');
	else {
?>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="">
	<title>RECRUITMENT | PT MEKAR ARMADA JAYA</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<link rel="stylesheet" href="spok/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
   .img-rounded {
    border-radius: 50%;
	}
	</style>
	<script>document.documentElement.className += ' spoiler-js';</script>
</head>
<body onmousedown="return false" oncontextmenu="return false" onselectstart="return false" >
<section id="header">	
			<center>
			<div class="container">
				<div class="row">
					<div id="carousel-slider" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner">
						<div class='item active'>
						<img src='assets/images/slides/web2.png' width='100%'>
						<div class='heading-text'>
								<div>
									<h2 class='heading animated fadeInRight'></h2>
									<h3 class='animated fadeInLeft'></h3>
									<img src="assets/images/slides/header.png" alt="">
								</div>
									</div>
								</div>
						<div class='item'>
						<img src='assets/images/slides/web1.png' width='100%'>
						<div class='heading-text'>
								<div>
									<h2 class='heading animated fadeInRight'></h2>
									<h3 class='animated fadeInLeft'></h3>
									<img src="assets/images/slides/header.png" alt="">
								</div>
									</div>
						<div class='carousel-caption'>
								<div>
									<h2 class='heading animated fadeInRight'></h2>
									<h3 class='animated fadeInLeft'></h3>
								</div>
									</div>
								</div>
						<div class='item'>
						<img src='assets/images/slides/web3.png' width='100%'>
						<div class='heading-text'>
								<div>
									<h2 class='heading animated fadeInRight'></h2>
									<h3 class='animated fadeInLeft'></h3>
									<img src="assets/images/slides/header.png" alt="">
								</div>
									</div>
						<div class='carousel-caption'>
								<div>
									<h2 class='heading animated fadeInRight'></h2>
									<h3 class='animated fadeInLeft'></h3>
								</div>
									</div>
								</div>
							</div>
							<div class="footer2 col-md-14">
							<img src="assets/images/slides/s.png" alt=""><img src="assets/images/slides/p.png" alt="">
							<img src="assets/images/slides/k.png" alt=""><img src="assets/images/slides/l.png" alt="">
							<img src="assets/images/slides/sp.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
									<a class='btn btn-two btn-success' href='index.php?r=Cek/index&jabatan=All'>Apply Now</a></h3>
			</div>
					</div> <!--/#carousel-slider-->
					
				</div>
			</div>
		</section>
	
      
<section class="news-box top-margin">
        <div class="container" id="open"><br/><br/><br/>
            <h2><span>Open Position</span></h2>
            <div class="row"> 
		<div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab" class="btn-danger">Magelang Plant</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
			  <br/>
				<div class="col-md-12">
					<div class="box box-default collapsed-box">
					<div class="box-header with-border"><?php
					$label=array();
					$itu=yii::app()->db->createCommand("select * from job_plant where id_plant=1")->queryAll();
					foreach($itu as $i=>$ii){ ?>
					<div class='spoiler spoiler-primary spoiler-state-collapsed' data-toggle-text='<?php echo $label[$i]=$ii['nama_job']; ?>' data-toggle-placement="top">
					<div class="spoiler-content"><b>Job Description :</b> <br/><br/> <?php echo $label[$i]=$ii['pendidikan'];?> <br/><br/>  
					<b>Requirement :</b> <br/><br/><?php echo $label[$i]=$ii['Keterangan'];?> <br/>
					<a href="index.php?r=Regnew/index&jabatan=<?php echo $label[$i]=$ii['nama_job'];?>" class="btn btn-two btn-success">Apply Now</a>
					</div>
				</div>
				<?php } ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		</div>
			  </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
			</div>
			<!-- nav-tabs-custom -->
			</div>
			
		<div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab" class="btn-danger">Tambun Plant</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
			  <br/>
				<div class="col-md-12">
					<div class="box box-default collapsed-box">
					<div class="box-header with-border"><?php
					$label=array();
					$itu=yii::app()->db->createCommand("select * from job_plant where id_plant=2")->queryAll();
					foreach($itu as $i=>$ii){ ?>
					<div class='spoiler spoiler-primary spoiler-state-collapsed' data-toggle-text='<?php echo $label[$i]=$ii['nama_job']; ?>' data-toggle-placement="top">
					<div class="spoiler-content"><b>Job Description :</b> <br/><br/> <?php echo $label[$i]=$ii['pendidikan'];?> <br/><br/>  
					<b>Requirement :</b> <br/><br/><?php echo $label[$i]=$ii['Keterangan'];?> <br/>
					<a href="index.php?r=Regkar/index&jabatan=<?php echo $label[$i]=$ii['nama_job'];?>" class="btn btn-two btn-success">Apply Now</a> </div>
				</div>
				<?php } ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		</div>
			  </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
			</div>
			<!-- nav-tabs-custom -->
			</div>
            </div>
        </div>
    </section>
   
   <div class="container" id="testimonial"><br/><br/><br/>
    <div class="row">
					<div class="col-md-3"><h2 class="title-box_primary">Testimonial</h2>
						<div class="grey-box-icon b1"> 
							<font size="4">Muh. Arifin</font><br/>
							Ilmu Hukum<br/>
							Universitas Diponegoro<br/><br/>
							<img class="img-circle" src="assets/images/arifin.png" alt=""><br/><br/>
     						<p>Armada perusahaan besar, modern, mempunyai sistem management yang bagus.</p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3"><h2 class="title-box_primary">&nbsp;</h2>
						<div class="grey-box-icon b4"> 
							<font size="4">Alief Rizka H</font><br/>
							Teknik Mesin<br/>
							Universitas Indonesia<br/><br/>
							<img class="img-circle" src="assets/images/alief.png" alt=""><br/><br/>
     						<p>Armada Membuat kita bertumbuh, memiliki visi kedepan untuk berkembang bersama perusahaan.</p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3"><h2 class="title-box_primary">&nbsp;</h2>
						<div class="grey-box-icon b3"> 
							<font size="4">Wahid Andrika</font><br/>
							K3<br/>
							Universitas Sebelas Maret<br/><br/>
							<img class="img-circle" src="assets/images/wahid.png" alt=""><br/><br/>
     						<p>Armada mampu memberikan pengembangan karir dan pengetahuan.</p><br/>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3"><h2 class="title-box_primary">&nbsp;</h2>
						<div class="grey-box-icon b2">  
							<font size="4">Chandra Gupyta</font><br/>
							Psikologi<br/>
							Universitas Gadjah Mada<br/><br/>
							<img class="img-circle" src="assets/images/chandra.png" alt=""><br/>
     						<p>Armada merupakan wadah bagi para generasi muda untuk berevolusi dan mengevolusi.</p>
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
	
      <section class="container" id="about"><br/><br/><br/>
      <div class="row">
      	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p class="justify"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya pertama kali didirikan sebagai bengkel rumahan pada 1974 dan kini berkembang menjadi salah satu perusahaan karoseri terbesar di Asia Tenggara. Didukung dengan area produksi sekitar 33 hektar dan lebih dari 2.000 orang pegawai, PT Mekar Armada Jaya terus berupaya menghadirkan kendaraan aman, nyaman dan berkualitas yang sesuai dengan kebutuhan konsumen.<br/>  
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selama lebih dari 40 tahun, perusahaan berkomitmen untuk terus berinovasi agar mampu memberikan layanan terbaik, tidak hanya bagi customer tetapi juga para karyawan dan lingkungan sekitar serta berkontribusi dalam meningkatkan kualitas hidup masyarakat Indonesia.<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya mengadopsi sistem Human Capital Management yang menjadikan karyawan dengan setiap kompetensi sebagai asset yang sangat berharga bagi perusahaan. Terlebih dalam dunia manufaktur, PT Mekar Armada Jaya memahami pentingnya Sumber Daya Manusia sebagai pilar utama dalam menciptakan kekuatan dan kinerja perusahaan yang terus berkelanjutan.<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh karena itu, sejak 2010 perusahaan secara aktif melakukan transformasi kebijakan dan sistem tata kelola karyawan untuk menselaraskan dengan tujuan dan rencana strategis perusahaan. Karyawan bagi PT Mekar Armada Jaya adalah Human Capital, menandakan bahwa karyawan dengan pengetahuan, skill dan kompetensi merupakan pendukung penting bagi tercapainya produktifitas perusahaan. 
</span><a href="http://newarmada.co.id" title="read more" class="btn-inline " target="blank">read more</a></p>
         </div>
              
          
          <div class="col-md-4"><div class="row panel">
					<div class="col-xs-12"><h2 class="title-box_primary">Contact Us</h2>
						<h3>PT. MEKAR ARMADA JAYA</h3>
						<p>
							<img src="assets/images/img1.jpg" alt="">
						</p>
						<p>Jl. Mayjen Bambang Soegeng No.7, PO. BOX 160 Magelang, Jawa Tengah 56172</p>
					</div>
				</div>
         </div>
      </section>
      	        <section class="container" id="why"><br/><br/><br/>
      <div class="row">
      	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">Why Choose Us</h2></div> 
		<h3>Bonafide Company</h3>
        <p class="justify"><span align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya memiliki track record 40 tahun lebih sebagai perusahaan dengan reputasi sangat baik di dunia bisnis Indonesia. 40 tahun menandakan kematangan experience, system dan culture yang mengerakkan perusahaan sehingga dapat terus memberikan pelayanan terbaik kepada pelanggan.</span>
		</p>
				<h3>Modern System and Technology</h3>
        <p class="justify"><span align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya mengadopsi berbagai teknologi dan sistem management modern untuk menjalankan bisnisnya sehingga hasil dari setiap proses memiliki standard yang sesuai dengan tuntutan pasar. Beberapa sertifikat yang sudah didapatkan oleh PT Mekar Armada Jaya antara lain adalah ISO 9001 Quality Management Systems, ISO TS 16949 Automotive Quality Management Systems dan ISO 14001 Environment Management System.</span>
		</p>
						<h3>Competitive Remuneration Package</h3>
        <p class="justify"><span align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya berusaha untuk memberikan remunerasi yang kompetitif kepada karyawan sesuai dengan bidang kerja dengan prinsip adil dan proportional, sehingga karyawan dengan talenta yang tinggi dapat terus stay di organisasi untuk memberikan performa terbaiknya. Adapun beberapa paket remunerasi adalah Basic Salary, Attendance Incentive, Skill Allowance, Functional Allowance, Official Trip Incentive, Health Insurance, Accident Insurance and Performance Bonus (as year end evaluation).</span>
		</p>
								<h3>People Development and Career Opportunity</h3>
        <p class="justify"><span align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PT Mekar Armada Jaya berkomitment untuk terus mengembangkan karyawan melalui berbagai pelatihan yang telah disusun secara komperhensif pada tiap tahunnya bagi semua level jabatan berdasarkan training need analisys yang didapatkan. Karyawan dengan High Potential dan High Performance secara sistematis dinilai untuk dapat menduduki berbagai jabatan strategis di perusahaan.</span>
		</p>
         </div>

              
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
							<a href="https://drive.google.com/file/d/0B2E-X-Mjoff4T0FkYmZwY3dxcWc/view?usp=sharing" target="blank"><img src="apk.png" alt="Download"></a>
								<h3 class="section-title">Head Office</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>Jl. Mayjen Bambang Soegeng No.7, PO. BOX 160 Magelang, Jawa Tengah 56172</p>
									
									<h5>Email</h5>
									<p>alief.rizka@newarmada.co.id<br/>
									recruitment_maj@newarmada.co.id</p>
									
									<h5>Phone</h5>
									<p>(+62293) - 363 591, 364 371, 365 211</p>
									
									<h3 class="section-title">Stamping Tools</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>Jl. Diponegoro Km.38 107 Tambun, Bekasi - Indonesia</p>
									
									<h5>Email</h5>
									<p>ambar_winasti.tbn@newarmada.co.id<br/>
									recruitment.tbn@newarmada.co.id</p>
									<h5>Phone</h5>
									<p>(+6221) 8834 6911</p>
								</div>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
        </section>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    <script src="spok/js/index.js"></script>
</body>
</html>
<?php } ?>