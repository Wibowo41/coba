<?php
if(isset($_GET['auth'])){
    $auth = $this->base64_decrypt($_GET['auth'], $this->key());
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    $sql = "UPDATE master_identifikasi SET is_active = '0', modified_time = '$currentdate', modified_by = '$id' WHERE id_identifikasi=".$auth;
    $command=$connection->createCommand($sql);
    $command->execute();
    
    echo'
    <script type="text/javascript">
    window.location = "index.php?r=master/identifikasi&result=30"';
    echo '</script>';  
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
