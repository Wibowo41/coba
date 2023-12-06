<?php
if(isset($_POST['code']) AND isset($_POST['nama']) AND isset($_POST['auth']) ){
    
    $idchecker = $this->base64_decrypt($_POST['auth'], $this->key());
    $nama = $_POST['nama'];
    $code = $_POST['code'];
    
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_checker WHERE id_checker = '$idchecker'")->queryAll();
    $array=array();
    $datarow = [];
    foreach($query as $row){
        $datarow['code'] = $array[]=$row['barcode']; 
    }
    
    if($code == $datarow['code']){
        $sql = "UPDATE master_checker SET nama_checker = '$nama',  barcode = '$code', modified_time = '$currentdate',  modified_by = '$id' WHERE id_checker =".$idchecker;
        
        $command=$connection->createCommand($sql);
        $command->execute();
        echo'
        <script type="text/javascript">
        window.location = "index.php?r=master/checker&result=40"';
        echo '</script>';
    } else {
        $query2 = Yii::app()->db->createCommand("SELECT * FROM master_checker WHERE barcode = '$code'")->queryAll();
        $count = count($query2);
        
        if($count > 0){
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/checker&result=20"';
            echo '</script>';
        } else {
            $sql = "UPDATE master_checker SET nama_checker = '$nama',  barcode = '$code', modified_time = '$currentdate',  modified_by = '$id' WHERE id_checker =".$idchecker;
        
            $command=$connection->createCommand($sql);
            $command->execute();
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/checker&result=40"';
            echo '</script>';
        }
    }
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
