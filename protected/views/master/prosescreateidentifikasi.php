<?php
if(isset($_POST['code']) AND isset($_POST['namaidentifikasi'])){
    
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE kode_identifikasi = '$_POST[code]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/identifikasi&result=20"';
        echo '</script>';
    } else {
        $code= $_POST['code'];
        $namaidentifikasi = $_POST['namaidentifikasi'];
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_identifikasi (kode_identifikasi, nama_identifikasi, is_active, created_time, created_by)VALUES(:kode_identifikasi, :nama_identifikasi, :is_active, :created_time, :created_by)");
        $command->bindValue(':kode_identifikasi', $code);
        $command->bindValue(':nama_identifikasi', $namaidentifikasi);
        $command->bindValue(':is_active', 1);
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/identifikasi&result=10"';
        echo '</script>';
    }
} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

