<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php

$id = Yii::app()->request->getQuery('id');

?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_pgl == null): ?>
		<tr><?php echo CHtml::hiddenField('id_pgl[]','',array('style'=>'width:120px')); ?>
		<td>
			Tanggal Masuk: <br/>(exp:2017-05-31/format date:Y-m-d)<br/><div class="row"><i class="glyphicon glyphicon-time"></i>
            <?php echo CHtml::textField('th_masuk[]','',array('style'=>'height:30px')); ?></div>
			Tanggal Keluar: <br/>(exp:2017-05-31/format date:Y-m-d)<br/><div class="row"><i class="glyphicon glyphicon-time"></i>
            <?php echo CHtml::textField('th_out[]','',array('style'=>'height:30px')); ?></div>
			Posisi: <br/><div class="row"><i class="glyphicon glyphicon-tag"></i>
            <?php echo CHtml::textField('posisi[]','',array('style'=>'height:30px')); ?></div>
			Asal Perusahaan atau Instansi: <br/><div class="row"><i class="glyphicon glyphicon-home"></i>
            <?php echo CHtml::textField('t_kerja[]','',array('style'=>'height:30px')); ?></div>
			Pencapaian: <br/><div class="row"><i class="glyphicon glyphicon-asterisk"></i>
            <?php echo CHtml::textField('pencapaian[]','',array('style'=>'height:30px')); ?></div>
			<br/><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_pgl); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_pgl[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('th_masuk[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('th_out[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('posisi[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('t_kerja[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('pencapaian[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
			<td><?php echo CHtml::textField('id_ck[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_pgl[]','',array('size'=>50,'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('th_masuk[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('th_out[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('posisi[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('t_kerja[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('pencapaian[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::textField('id_ck[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
</table>