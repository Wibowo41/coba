<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php

$id = Yii::app()->request->getQuery('id');

?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_skill == null): ?>
		<tr><?php echo CHtml::hiddenField('id_skill[]','',array('style'=>'width:120px')); ?>
		<td>Bidang Skill / Jenis Keahlian yang dimiliki: <br/>
		<div class="row"><i class="glyphicon glyphicon-th-large"></i>
		<?php echo CHtml::textField('jenis[]','',array('style'=>'height:30px')); ?></div><br/>
			Level: <br/><div class="row"><i class="glyphicon glyphicon-asterisk"></i>
            <?php echo CHtml::dropDownList('level[]',"string",
                array(
                    "Kurang"=>"Kurang",
                    "Cukup"=>"Cukup",
                    "Baik"=>"Baik",
                ),array('style'=>'width:200px'));
            ?></div>
			<br/><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_skill); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_skill[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::textField('jenis[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td><?php echo CHtml::dropDownList('level[]',"string",
                array(
                    "Kurang"=>"Kurang",
                    "Cukup"=>"Cukup",
                    "Baik"=>"Baik",
                ),array('style'=>'width:200px'));
            ?></td>
			<td><?php echo CHtml::textField('id_ck[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_skill[]','',array('size'=>50,'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('jenis[]','',array('style'=>'width:90px')); ?></td>
		 <td><?php echo CHtml::dropDownList('level[]',"string",
                array(
                    "Kurang"=>"Kurang",
                    "Cukup"=>"Cukup",
                    "Baik"=>"Baik",
                ),array('style'=>'width:200px'));
            ?></td>
		<td><?php echo CHtml::textField('id_ck[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
</table>