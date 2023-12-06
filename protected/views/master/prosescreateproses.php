<?php
if(isset($_POST['proses']) AND isset($_POST['keteranganproses'])){
    $query= Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE code_master_proses = '$_POST[proses]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/proses&result=20"';
        echo '</script>';
    } else {
        $proses = $_POST['proses'];
        $keteranganproses = $_POST['keteranganproses'];
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_bagian (code_master_proses, keterangan_master_proses, is_active, created_time, created_by)VALUES(:code_master_proses, :keterangan_master_proses, :is_active, :created_time, :created_by)");
        $command->bindValue(':code_master_proses', $proses);
        $command->bindValue(':keterangan_master_proses', $keteranganproses);
        $command->bindValue(':is_active', 1);
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/proses&result=10"';
        echo '</script>';
    }

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

