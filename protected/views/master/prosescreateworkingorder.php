<?php
if(isset($_POST['workingorder'])){
    
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_wo WHERE nama_wo = '$_POST[workingorder]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/workingorder&result=20"';
        echo '</script>';
    } else {
        $workingorder= $_POST['workingorder'];
        $keteranganworkingorder = $_POST['keteranganworkingorder'];
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_wo (nama_wo, keterangan_wo, is_active, created_time, created_by)VALUES(:nama_wo, :keterangan_wo, :is_active, :created_time, :created_by)");
        $command->bindValue(':nama_wo', $workingorder);
        $command->bindValue(':keterangan_wo', $keteranganworkingorder);
        $command->bindValue(':is_active', "1");
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/workingorder&result=10"';
        echo '</script>';
    }
} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

