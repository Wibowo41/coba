<?php
if(isset($_GET['iduser'])){
    $idusers = $_GET['iduser'];
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    $sql = "UPDATE users SET is_active = '0', modified_time = '$currentdate', modified_by = '$id' WHERE id=".$idusers;
    $command=$connection->createCommand($sql);
    $command->execute();
    
    echo'
    <script type="text/javascript">
    window.location = "index.php?r=master/user&result=30"';
    echo '</script>';  
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php?r=master"';
    echo '</script>';  
}
        
        
