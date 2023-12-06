<?php

$id = Yii::app()->request->getQuery('id');
?>
<table class="appendo-gii" id="<?php echo $id ?>">
    <?php if ($model->id_hub == null): ?>
		<tr><?php echo CHtml::hiddenField('id_hub[]','',array('style'=>'width:120px')); ?>
		<td>Nama : <br/><i class="glyphicon glyphicon-user"></i>
		<?php echo CHtml::textField('nama[]','',array('style'=>'height:30px')); ?>
            <br/>
			Status : <br/><i class="glyphicon glyphicon-picture"></i>
            <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Ayah"=>"Ayah",
                    "Ibu"=>"Ibu",
					"Saudara Laki-laki"=>"Saudara Laki-laki",
					"Saudara Perempuan"=>"Saudara Perempuan",
                ),array('style'=>'width:200px'));
            ?>
			<br/>
			Umur : <br/><i class="glyphicon glyphicon-time"></i>
			<?php echo CHtml::textField('umur[]','',array('style'=>'height:30px')); ?>&nbsp;&nbsp;&nbsp;
			<br/>
			Pendidikan : <br/><i class="glyphicon glyphicon-inbox"></i>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:200px'));
            ?>
			<br/>
			Jabatan : <br/><i class="glyphicon glyphicon-bookmark"></i>
			<?php echo CHtml::textField('jabatan[]','',array('style'=>'height:30px')); ?>
			<br/>
			Perusahaan / Instansi : <br/><i class="glyphicon glyphicon-th-large"></i>
			<?php echo CHtml::textField('psh_ints[]','',array('style'=>'height:30px')); ?><br/><br/><br/><br/><br/></td>
			<?php echo CHtml::hiddenField('id_ck[]',$id); ?>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_hub); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('id_hub[]',$model->enum_name[$i],array('style'=>'height:25px','value'=>'HUB-'.time(),)); ?></td>
                <td><?php echo CHtml::textField('nama[]',$model->enum_name[$i],array('style'=>'height:25px')); ?></td>
                <td>
                <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Ayah"=>"Ayah",
                    "Ibu"=>"Ibu",
					"Saudara Laki-laki"=>"Saudara Laki-laki",
					"Saudara Perempuan"=>"Saudara Perempuan",
                ),array('style'=>'width:200px'));
            ?>
                </td>
				<td><?php echo CHtml::textField('umur[]',$model->enum_name[$i],array('style'=>'width:50px')); ?></td>
				<td><?php echo CHtml::textField('psh_ints[]',$model->enum_name[$i],array('style'=>'width:120px')); ?></td>
				<td>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:200px'));
            ?>
            </td>
			<td><?php echo CHtml::textField('jabatan[]',$model->enum_name[$i],array('style'=>'width:90px')); ?></td>
				</tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('id_hub[]','',array('size'=>50, 'value'=>'HUB-'.time(),'maxlength'=>50)); ?></td>
            <td><?php echo CHtml::textField('nama[]','',array('style'=>'width:90px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('status[]',"string",
                array(
                    "Ayah"=>"Ayah",
                    "Ibu"=>"Ibu",
					"Saudara Laki-laki"=>"Saudara Laki-laki",
					"Saudara Perempuan"=>"Saudara Perempuan",
                ),array('style'=>'width:200px'));
            ?>
            </td>
		 <td><?php echo CHtml::textField('umur[]','',array('style'=>'width:50px')); ?></td>
			<td>
            <?php echo CHtml::dropDownList('pdk[]',"string",
                array(
                    "SD/Sederajat"=>"SD/Sederajat",
                    "SMP/Sederajat"=>"SLTP/Sederajat",
					"SMK/Sederajat"=>"SMK/Sederajat",
					"D3/D4"=>"D3/D4",
					"S1"=>"S1",
					"S2"=>"S2",
                ),array('style'=>'width:200px'));
            ?>
            </td>
			<td><?php echo CHtml::textField('jabatan[]','',array('style'=>'width:90px')); ?></td>
		<td><?php echo CHtml::textField('psh_ints[]','',array('style'=>'width:120px')); ?></td>
		</tr>
    <?php endif; ?>
</table>