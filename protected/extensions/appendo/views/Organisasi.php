<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php

$id = Yii::app()->request->getQuery('id');

?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_or == null): ?>
		<tr><?php echo CHtml::hiddenField('id_or[]','',array('style'=>'width:120px')); ?>
		<td>Nama Organisasi: <br/>
		<div class="row"><i class="glyphicon glyphicon-th-large"></i>
		<?php echo CHtml::textField('nm_or[]','',array('style'=>'height:30px')); ?></div>
           
			Bidang Organisasi: <br/><div class="row"><i class="glyphicon glyphicon-asterisk"></i>
            <?php echo CHtml::textField('bidang[]','',array('style'=>'height:30px')); ?></div>
			
			Posisi Jabatan: <br/><div class="row"><i class="glyphicon glyphicon-download-alt"></i>
			<?php echo CHtml::textField('posisi[]','',array('style'=>'height:30px')); ?></div>
		
			Periode Tahun (ex. 1991-1993): <br/><i class="glyphicon glyphicon-time"></i>
            <?php echo CHtml::textField('periode[]','',array('style'=>'height:30px')); ?></div>
		
			<br/><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_or); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_or[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('nm_or[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('bidang[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
				<td><?php echo CHtml::textField('posisi[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::textField('periode[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
			<td><?php echo CHtml::textField('id_ck[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_or[]','',array('size'=>50,'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('nm_or[]','',array('style'=>'width:90px')); ?></td>
		 <td><?php echo CHtml::textField('bidang[]','',array('style'=>'width:50px')); ?></td>
			<td><?php echo CHtml::textField('posisi[]','',array('style'=>'width:90px')); ?></td>
			<td><?php echo CHtml::textField('periode[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::textField('id_ck[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
</table>