<?php	
	$f=Yii::app()->user->id;
	$ck=karyawan::model()->findAllByAttributes(array('id_user'=>$f));
?>
<?php
$id = Yii::app()->request->getQuery('id');
?>
<table class="appendo-gii" id="<?php echo $id ?>">
	<tbody>
    <?php if ($model->id_anak == null): ?>
		<?php echo CHtml::hiddenField('id_anak[]','',array('style'=>'width:120px')); ?><tr>
		<td>&nbsp;&nbsp;&nbsp;Nama : <br/>&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-user"></i><?php echo CHtml::textField('nama[]','',array('style'=>'height:25px;')); ?>&nbsp;&nbsp;&nbsp;
            <br/></td><td>
			Status : <br/><i class="glyphicon glyphicon-play-circle"></i>
            <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Anak Kandung Laki - laki"=>"Anak Kandung Laki - laki",
                    "Anak Kandung Perempuan"=>"Anak Kandung Perempuan",
					"Anak Tiri Laki - laki"=>"Anak Tiri Laki-laki",
					"Anak Tiri Perempuan"=>"Anak Tiri Perempuan",
                ),array('style'=>'width:150px'));
            ?>&nbsp;&nbsp;&nbsp;
			<br/></td><td>
			Umur : <br/><i class="glyphicon glyphicon-time"></i>
            <?php echo CHtml::textField('umur[]','',array('style'=>'height:25px;')); ?>&nbsp;&nbsp;&nbsp;
			<br/></td><td>
			Pendidikan : <br/><i class="glyphicon glyphicon-th-large"></i>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
				    "Belum Sekolah"=>"Belum Sekolah",
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:150px'));
            ?>&nbsp;&nbsp;&nbsp;
            </td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_anak); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_anak[]',$model->enum_name[$i],array('style'=>'width:120px','value'=>'HUB-'.time(),)); ?></td>
                <td><?php echo CHtml::textField('nama[]',$model->enum_name[$i],array('style'=>'width:120px')); ?></td>
                <td>
                <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Anak Kandung Laki - laki"=>"Anak Kandung Laki - laki",
                    "Anak Kandung Perempuan"=>"Anak Kandung Perempuan",
					"Anak Tiri Laki - laki"=>"Anak Tiri Laki-laki",
					"Anak Tiri Perempuan"=>"Anak Tiri Perempuan",
                ),array('style'=>'width:200px'));
            ?>
                </td>
				<td><?php echo CHtml::textField('umur[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
					"Belum Sekolah"=>"Belum Sekolah",
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:200px'));
            ?>
            </td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_anak[]','',array('size'=>50, 'value'=>'HUB-'.time(),'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('nama[]','',array('style'=>'width:90px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Anak Kandung Laki - laki"=>"Anak Kandung Laki - laki",
                    "Anak Kandung Perempuan"=>"Anak Kandung Perempuan",
					"Anak Tiri Laki - laki"=>"Anak Tiri Laki-laki",
					"Anak Tiri Perempuan"=>"Anak Tiri Perempuan",
                ),array('style'=>'width:200px'));
            ?>
            </td>
		 <td><?php echo CHtml::textField('umur[]','',array('style'=>'width:50px')); ?></td>
			<td>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
                    "Belum Sekolah"=>"Belum Sekolah",
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:200px'));
            ?>
            </td>
		</tr>
    <?php endif; ?>
</table><br/><br/>