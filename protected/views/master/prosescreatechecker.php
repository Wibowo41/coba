<?php
if(isset($_POST['code']) AND isset($_POST['nama'])){
    $query= Yii::app()->db->createCommand("SELECT * FROM master_checker WHERE barcode = '$_POST[code]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/checker&result=20"';
        echo '</script>';
    } else {
        $nama = $_POST['nama'];
        $code = $_POST['code'];
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_checker (barcode, nama_checker, created_time, created_by)VALUES(:barcode, :nama_checker, :created_time, :created_by)");
        $command->bindValue(':barcode', $code);
        $command->bindValue(':nama_checker', $nama);
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/checker&result=10"';
        echo '</script>';
    }

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

