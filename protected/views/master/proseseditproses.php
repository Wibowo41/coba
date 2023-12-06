<?php
if(isset($_POST['auth'])){
    
    $idproses = $this->base64_decrypt($_POST['auth'], $this->key());
    $proses = $_POST['proses'];
    $keteranganproses = $_POST['keteranganproses'];
    
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    
    $query= Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE id_master_bagian = '$idproses'")->queryAll();
    $array=array();
    $datarow = [];
    foreach($query as $row){
        $datarow['code_master_proses'] = $array[]=$row['code_master_proses']; 
    }
    
    if($proses == $datarow['code_master_proses']){
        $sql = "UPDATE master_bagian SET code_master_proses = '$proses', keterangan_master_proses = '$keteranganproses', modified_time = '$currentdate',  modified_by = '$id' WHERE id_master_bagian=".$idproses;
        $command=$connection->createCommand($sql);
        $command->execute();
        echo'
        <script type="text/javascript">
        window.location = "index.php?r=master/proses&result=40"';
        echo '</script>';
    } else {
        $query2 = Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE code_master_proses = '$proses'")->queryAll();
        $count = count($query2);
        
        if($count > 0){
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/proses&result=20"';
            echo '</script>';
        } else {
            $sql = "UPDATE master_bagian SET code_master_proses = '$proses', keterangan_master_proses = '$keteranganproses', modified_time = '$currentdate',  modified_by = '$id' WHERE id_master_bagian=".$idproses;
            $command=$connection->createCommand($sql);
            $command->execute();
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/proses&result=40"';
            echo '</script>';
        }
    }
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
