<?php 
	if(Yii::app()->user->isAdmin()){
?>

<footer id="footer">
 
		<div class="container">
   
			<div class="social text-center">
				<a href="https://twitter.com/armadakaroseri" target="blank"><i class="fa fa-twitter"></i></a>
				<a href="https://facebook.com/armadakaroseri" target="blank"><i class="fa fa-facebook"></i></a>
				<a href="http://www.pictaram.com/user/newarmada.official/3111227834" target="blank"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php?r=Menuadmin/admin">Data Pelamar</a> | 
								<a href="index.php?r=Blacklist/admin">BlackList</a> |
								<a href="index.php?r=Downloadlist/admin">Download Data</a> |
								<a href="index.php?r=Status/admin">Status Data</a> |
								<a href="index.php?r=JobPlant/admin">Lowongan Data</a> 
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2017. Created by <a href="http://newarmada.co.id/" rel="develop">HRIS DEVELOPMENT</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

<?php
	}else if(Yii::app()->user->isAll()){
	?>
	<footer id="footer">
 
		<div class="container">
   
			<div class="social text-center">
				<a href="https://twitter.com/armadakaroseri" target="blank"><i class="fa fa-twitter"></i></a>
				<a href="https://facebook.com/armadakaroseri" target="blank"><i class="fa fa-facebook"></i></a>
				<a href="http://www.pictaram.com/user/newarmada.official/3111227834" target="blank"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php?r=Menuadmin/admin">Data Pelamar</a> | 
								<a href="index.php?r=Blacklist/index">BlackList</a> |
								<a href="index.php?r=Downloadlist/index">Download Data</a> |
								<a href="index.php?r=Status/index">Status Data</a> |
								<a href="index.php?r=JobPlant/index">Lowongan Data</a> 
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2017. Created by <a href="http://newarmada.co.id/" rel="develop">HRIS DEVELOPMENT</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
<?php
	}else{
?>
<footer id="footer">
 
		<div class="container">
   
			<div class="social text-center">
				<a href="https://twitter.com/armadakaroseri" target="blank"><i class="fa fa-twitter"></i></a>
				<a href="https://facebook.com/armadakaroseri" target="blank"><i class="fa fa-facebook"></i></a>
				<a href="http://www.pictaram.com/user/newarmada.official/3111227834" target="blank"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php?r=#">Home</a> | 
								<a href="index.php?r=#about">About</a> |
								<a href="index.php?r=#testimonial">Testimonial</a> |
								<a href="index.php?r=#why">Why Choose Us</a> |
								<a href="index.php?r=#about">Contact</a> |
								<a href="index.php?r=Menuadmin/admin">Admin</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2017. Created by <a href="http://newarmada.co.id/" rel="develop">HRIS DEVELOPMENT</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
	<?php	}
?>