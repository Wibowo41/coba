<?php
if(isset($_POST['auth'])){
    
    $ididentifikasi = $this->base64_decrypt($_POST['auth'], $this->key());
    $code = $_POST['code'];
    $namaidentifikasi = $_POST['namaidentifikasi'];
    
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE id_identifikasi = '$ididentifikasi'")->queryAll();
    $array=array();
    $datarow = [];
    foreach($query as $row){
        $datarow['kode_identifikasi'] = $array[]=$row['kode_identifikasi']; 
    }
    
    if($code == $datarow['kode_identifikasi']){
        $sql = "UPDATE master_identifikasi SET kode_identifikasi = '$code', nama_identifikasi = '$namaidentifikasi', modified_time = '$currentdate',  modified_by = '$id' WHERE id_identifikasi=".$ididentifikasi;
        $command=$connection->createCommand($sql);
        $command->execute();
        echo'
        <script type="text/javascript">
        window.location = "index.php?r=master/identifikasi&result=40"';
        echo '</script>';
    } else {
        $query2 = Yii::app()->db->createCommand("SELECT * FROM master_identifikasi WHERE kode_identifikasi = '$code'")->queryAll();
        $count = count($query2);
        
        if($count > 0){
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/identifikasi&result=20"';
            echo '</script>';
        } else {
            $sql = "UPDATE master_identifikasi SET kode_identifikasi = '$code', nama_identifikasi = '$namaidentifikasi', modified_time = '$currentdate',  modified_by = '$id' WHERE id_identifikasi=".$ididentifikasi;
            $command=$connection->createCommand($sql);
            $command->execute();
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/identifikasi&result=40"';
            echo '</script>';
        }
    }
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
