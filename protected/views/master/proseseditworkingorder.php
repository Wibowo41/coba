<?php
if(isset($_POST['auth'])){
    
    $idwo = $this->base64_decrypt($_POST['auth'], $this->key());
    $workingorder = $_POST['workingorder'];
    $keteranganwo = $_POST['keteranganwo'];
    
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_wo WHERE id_wo = '$idwo'")->queryAll();
    $array=array();
    $datarow = [];
    foreach($query as $row){
        $datarow['nama_wo'] = $array[]=$row['nama_wo']; 
    }
    
    if($workingorder == $datarow['nama_wo']){
        $sql = "UPDATE master_wo SET nama_wo = '$workingorder', keterangan_wo = '$keteranganwo', modified_time = '$currentdate',  modified_by = '$id' WHERE id_wo=".$idwo;
        $command=$connection->createCommand($sql);
        $command->execute();
        echo'
        <script type="text/javascript">
        window.location = "index.php?r=master/workingorder&result=40"';
        echo '</script>';
    } else {
        $query2 = Yii::app()->db->createCommand("SELECT * FROM master_wo WHERE nama_wo = '$workingorder'")->queryAll();
        $count = count($query2);
        
        if($count > 0){
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/workingorder&result=20"';
            echo '</script>';
        } else {
            $sql = "UPDATE master_wo SET nama_wo = '$workingorder', keterangan_wo = '$keteranganwo', modified_time = '$currentdate',  modified_by = '$id' WHERE id_wo=".$idwo;
            $command=$connection->createCommand($sql);
            $command->execute();
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/workingorder&result=40"';
            echo '</script>';
        }
    }
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
