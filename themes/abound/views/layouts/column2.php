<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php 
	if(Yii::app()->user->isAdmin()) {
?>
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class=""></i>  Manage Data Pelamar', 'url'=>array('/Menuadmin/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Download Table Data', 'url'=>array('/Downloadlist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Status Table Data', 'url'=>array('/Status/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Lowongan Table Data', 'url'=>array('/JobPlant/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage User', 'url'=>array('/User/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
			),
			));?>
		</div>
        <br>
		
    </div><!--/span-->
<?php
} else if(Yii::app()->user->isMember()) 
{
?>
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class=""></i>  Manage Data Pelamar', 'url'=>array('/Menuadmin/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Data Pelamar', 'url'=>array('/Menuadmin/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Download Table Data', 'url'=>array('/Downloadlist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Status Table Data', 'url'=>array('/Status/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage Lowongan Table Data', 'url'=>array('/JobPlant/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  Manage User', 'url'=>array('/User/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
			),
			));?>
		</div>
        <br>
		
    </div><!--/span-->
<?php
} else if(Yii::app()->user->isAll()) 
{
?>
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class=""></i>  Manage Data Pelamar', 'url'=>array('/Menuadmin/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/admin'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
				array('label'=>'<i class=""></i>  Manage BlackList', 'url'=>array('/Blacklist/index'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  Manage Download Table Data', 'url'=>array('/Downloadlist/index'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  Manage Status Table Data', 'url'=>array('/Status/index'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  Manage Lowongan Table Data', 'url'=>array('/JobPlant/index'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isAll()),
				array('label'=>'<i class=""></i>  LogOut', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>''),'visible'=>Yii::app()->user->isMember()),
			),
			));?>
		</div>
        <br>
		
    </div><!--/span-->
<?php
}
else {
?>
  <div class="row-fluid">
	<div class="span3 list-group-item clearfix">
		<div class="sidebar-nav ">
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Pick Positions
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Personal Data
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Hubungan Keluarga
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Pendidikan Formal
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Pdk. Non Formal
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Organisasi Data
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input skill Data
</div>
<div class="list-group">
&nbsp;<i class="glyphicon glyphicon-arrow-right"></i>&nbsp;Input Pengalaman Kerja
</div>
		</div>
    </div><!--/span-->
<?php
}
?>
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>