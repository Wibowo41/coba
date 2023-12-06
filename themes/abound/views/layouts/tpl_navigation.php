<?php 
	if(Yii::app()->user->isAdmin()){
?>

<div class="navbar navbar-fixed-top">

<div class="navbar list-group-item clearfix">
		<div class="container">
		<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">Menu</button>
				<a class="navbar-brand" href="../index.php?r=">
					<img src="assets/images/logo.png" alt="RECRUITMENT"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1"><a href="index.php?r=Menuadmin/admin"><font color="#aa0000">Data Pelamar</font></a></li>
					<li class="c2"><a href="index.php?r=Blacklist/admin"><font color="#aa00ff">BlackList</font></a></li>
					<li class="c3"><a href="index.php?r=Downloadlist/admin"><font color="#00ff00">Download Data</font></a></li>
					<li class="c4"><a href="index.php?r=Status/admin"><font color="#0055ff">Status Data</font></a></li>
					<li class="c5"><a href="index.php?r=JobPlant/admin"><font color="#ffaa7f">Lowongan Data</font></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
	}else if(Yii::app()->user->isAll()){
?>

<div class="navbar navbar-fixed-top">

<div class="navbar list-group-item clearfix">
		<div class="container">
		<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">Menu</button>
				<a class="navbar-brand" href="../index.php?r=">
					<img src="assets/images/logo.png" alt="RECRUITMENT"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1"><a href="index.php?r=Menuadmin/admin"><font color="#aa0000">Data Pelamar</font></a></li>
					<li class="c2"><a href="index.php?r=Blacklist/index"><font color="#aa00ff">BlackList</font></a></li>
					<li class="c3"><a href="index.php?r=Downloadlist/index"><font color="#00ff00">Download Data</font></a></li>
					<li class="c4"><a href="index.php?r=Status/index"><font color="#0055ff">Status Data</font></a></li>
					<li class="c5"><a href="index.php?r=JobPlant/index"><font color="#ffaa7f">Lowongan Data</font></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
	}else{
?>
<div class="navbar navbar-fixed-top">

<div class="navbar list-group-item clearfix">
		<div class="container">
		<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">Menu</button>
					<img src="assets/images/logo.png" alt="RECRUITMENT">
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1"><a href="index.php?r=#"><font color="#aa0000">Home</font></a></li>
					<li class="c2"><a href="index.php?r=#about"><font color="#aa00ff">About</font></a></li>
					<li class="c3"><a href="index.php?r=#testimonial"><font color="#00ff00">Testimonial</font></a></li>
					<li class="c4"><a href="index.php?r=#why"><font color="#0055ff">Why Chosse Us</font></a></li>
					<li class="c4"><a href="index.php?r=#open"><font color="#ff007f">Open Position</font></a></li>
					<li class="c7"><a href="#about"><font color="#5555ff">Contact Us</font></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php	}
?>