<?php
$jbt = Yii::app()->request->getQuery('jabatan');
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karir New Armada">
    <meta name="author" content="E-recruitment New Armada">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link rel="stylesheet" href="libary/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="libary/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="libary/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<style>
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
	size:50px;
	color:blue;
}
</style>
</head> 
<body>
<div class="wrapper">
<div class="sidebar-wrapper">
            <div class="sidebar-wrapper">
<center>     
<div class="form">
<div class="wrapper">
<h2><span>LOGIN</span></h2>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'placeholder'=>'Isikan Username','maxlength'=>50, 'style'=>'height:30px;')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->PasswordField($model,'password',array('size'=>50,'placeholder'=>'Isikan Password','maxlength'=>50, 'style'=>'height:30px;')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
	

	<div class="row buttons"><center>
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
	
	</div>
</div>
<?php $this->endWidget(); ?>
            
        </div><!--//sidebar-wrapper-->
</div>
<div class="main-wrapper">
<section class="section summary-section"><center>
<h1>Welcome To Recruitment System New Armada</h1></center>
 <hr>
 <h3><i class="glyphicon glyphicon-user"></i>KARIR</h3>
	 <p>
        Bergabunglah Bersama Kami
</p><p>New Armada menawarkan Anda kesempatan untuk bergabung dengan kami dan memperluas bakat, profesionalisme dan pengalaman dalam manufaktur, trading automotive, keuangan dan perbankan, serta beberapa bidang lainnya.</p>
    <p></p>
	<div id="MainContainer_T7172FED0004_Col00" class="sf_colsIn sf_1col_1in_100"><div class='accordion-block'><div class="title-block"> <span class="title">PT MEKAR ARMADA JAYA menawarkan Anda kesempatan untuk bergabung dan memperluas bakat dalam industri manufaktur, trading automotive, keuangan dan perbankan, serta beberapa bidang lainnya, melalui&nbsp; proses seleksi sesuai kompetensi yang dibutuhkan oleh perusahaan dan diinformasikan secara terpusat melalui channel &nbsp;resmi&nbsp; perusahaan. Perlu&nbsp;<strong>diperhatikan</strong>&nbsp;untuk seluruh pelamar bahwa pada proses seleksi kami&nbsp;<strong>tidak meminta biaya seleksi dalam bentuk apapun baik melalui telepon, sms serta email.</strong>&nbsp;<br /> <br />
Pelamar diharapakan selalu berhati-hati terdapat penipuan yang mengatasnamakan PT MEKAR ARMADA JAYA. Pemanggilan proses penerimaan karyawan hanya melalui email resmi PT MEKAR ARMADA JAYA / Contact Resmi New Armada. Jika pelamar mendapatkan panggilan seperti di bawah maka dapat dipastikan hal ini merupakan penipuan.<br />
1.&nbsp;Meminta biaya proses administrasi<br />
2.&nbsp;Meminta no rekening saat proses seleksi<br />
3.&nbsp;Memberikan surat atau email bukan melalui email dan contact resmi New Armada<br />
<br /><br/><br/><br/>
</section>
</div><div>
 </div>
 </div>
</div>
</div>
</div>
    <!-- Javascript -->          
    <script type="text/javascript" src="libary/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="libary/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="libary/js/main.js"></script>            
</body>
</html> 