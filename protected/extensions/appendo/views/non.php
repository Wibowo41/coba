<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php
$id = Yii::app()->request->getQuery('id');
?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_non == null): ?>
		<tr><?php echo CHtml::hiddenField('id_non[]','',array('style'=>'width:120px')); ?>
		<td>Jenis Pendidikan Non Formal / Kursus / Sertifikasi: <br/>
		<div class="row"><i class="glyphicon glyphicon-th-large"></i>
		<?php echo CHtml::textField('jenis[]','',array('style'=>'height:30px')); ?></div>
           
			Penyelenggara: <br/><div class="row"><i class="glyphicon glyphicon-asterisk"></i>
            <?php echo CHtml::textField('penyelengara[]','',array('style'=>'height:30px')); ?></div>
			
			Tempat / Asal Penyelenggara: <br/><div class="row"><i class="glyphicon glyphicon-download-alt"></i>
			<?php echo CHtml::textField('tempat[]','',array('style'=>'height:30px')); ?></div>
		
			Tanggal Mulai : <br/><div class="row"><i class="glyphicon glyphicon-road"></i>
			<?php echo CHtml::textField('th_on[]','',array('style'=>'height:30px')); ?></div>
		
			Tanggal selesai : <br/><div class="row"><i class="glyphicon glyphicon-road"></i>
			<?php echo CHtml::textField('th_out[]','',array('style'=>'height:30px')); ?></div>
			
			Deskripsi Tentang Pendidikan Non Formal: <br/><div class="row"><i class="glyphicon glyphicon-download-alt"></i>
			<?php echo CHtml::textField('des[]','',array('style'=>'height:30px')); ?></div>
			<br/><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_non); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_non[]',$model->enum_name[$i],array('style'=>'height:25px','value'=>''.time(),)); ?></td>
                <td><?php echo CHtml::textField('jenis[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('penyelengara[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
				<td><?php echo CHtml::textField('th_on[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::textField('th_out[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::textField('des[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
			<td><?php echo CHtml::textField('id_ck[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_non[]','',array('size'=>50, 'value'=>'HUB-'.time(),'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('jenis[]','',array('style'=>'width:90px')); ?></td>
		 <td><?php echo CHtml::textField('penyelengara[]','',array('style'=>'width:50px')); ?></td>
			<td><?php echo CHtml::textField('th_on[]','',array('style'=>'width:90px')); ?></td>
			<td><?php echo CHtml::textField('th_out[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::textField('des[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::textField('id_ck[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
</table>