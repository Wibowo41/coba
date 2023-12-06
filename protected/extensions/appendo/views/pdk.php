<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php

$id = Yii::app()->request->getQuery('id');

?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_pdk == null): ?>
		<tr><?php echo CHtml::hiddenField('id_pdk[]','',array('style'=>'width:120px')); ?>
		<td>Nama Sekolah: <br/><i class="glyphicon glyphicon-th-large"></i><?php echo CHtml::textField('nm_pdk[]','',array('style'=>'height:30px')); ?>
            <br/>
			Periode Tahun (ex. 1991-1993): <br/><i class="glyphicon glyphicon-asterisk"></i>
            <?php echo CHtml::textField('th_pdk[]','',array('style'=>'height:30px')); ?>
			<br/>
			Jurusan / Program studi : <br/>(exp: SD-SMP [FORMAL] SMK/SMA [Sesuai Jurusan] Univ. [D3/D4/S1/S2/S3 sesuai program studi]<br/><i class="glyphicon glyphicon-download-alt"></i>
			<?php echo CHtml::textField('jurusan[]','',array('style'=>'height:30px')); ?>
			<br/>
			<br/>
			Alamat Sekolah : <br/><i class="glyphicon glyphicon-road"></i>
			<?php echo CHtml::textField('tmp_pdk[]','',array('style'=>'height:30px')); ?>
			<br/>
			Status Kelulusan : <br/><i class="glyphicon glyphicon-flag"></i>
            <?php echo CHtml::dropDownList('lu_ti[]',"string",
                array(
                    "LULUS"=>"LULUS",
                    "TIDAK LULUS"=>"TIDAK LULUS",
                ),array('style'=>'width:200px'));
            ?>
			<br/><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_pdk); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_pdk[]',$model->enum_name[$i],array('style'=>'height:25px','value'=>''.time(),)); ?></td>
                <td><?php echo CHtml::textField('nm__pdk[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('th_pdk[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
				<td><?php echo CHtml::textField('jurusan[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::textField('tmp_pdk[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::dropDownList('lu_ti[]',"string",
                array(
                    "LULUS"=>"LULUS",
                    "TIDAK LULUS"=>"TIDAK LULUS",
                ),array('style'=>'width:200px'));
            ?></td>
			<td><?php echo CHtml::textField('id_ck[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_pdk[]','',array('size'=>50, 'value'=>'HUB-'.time(),'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('nm_pdk[]','',array('style'=>'width:90px')); ?></td>
		 <td><?php echo CHtml::textField('th_pdk[]','',array('style'=>'width:50px')); ?></td>
			<td><?php echo CHtml::textField('jurusan[]','',array('style'=>'width:90px')); ?></td>
			<td><?php echo CHtml::textField('tmp_pdk[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::dropDownList('lu_ti[]',"string",
                array(
                    "LULUS"=>"LULUS",
                    "TIDAK LULUS"=>"TIDAK LULUS",
                ),array('style'=>'width:200px'));
            ?></td>
			<td><?php echo CHtml::textField('id_ck[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
</table>