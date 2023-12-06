<?php
if(isset($_POST['iduser']) AND isset($_POST['username']) AND isset($_POST['level'])){
    
    $idusers = $this->base64_decrypt($_POST['iduser'], $this->key());
    $username = $_POST['username'];
    $keterangan = $_POST['keterangan'];
    $level = $_POST['level'];
    
    $id=Yii::app()->user->id;
    $currentdate = date("Y-m-d H:i:s");
    
    $connection = yii::app()->db;
    
    $query= Yii::app()->db->createCommand("SELECT * FROM users WHERE id = '$idusers'")->queryAll();
    $array=array();
    $datarow = [];
    foreach($query as $row){
        $datarow['username'] = $array[]=$row['username']; 
    }
    
    if($username == $datarow['username']){
        if($_POST['password'] == ""){
            $sql = "UPDATE users SET username = '$username',  keterangan = '$keterangan',  level = '$level',  modified_time = '$currentdate',  modified_by = '$id' WHERE id=".$idusers;
        } else {
            $password = md5($_POST['password']);
            $sql = "UPDATE users SET username = '$username', keterangan = '$keterangan', level = '$level', modified_time = '$currentdate',  modified_by = '$id', password = '$password' WHERE id=".$idusers;
        }
        $command=$connection->createCommand($sql);
        $command->execute();
        echo'
        <script type="text/javascript">
        window.location = "index.php?r=master/user&result=40"';
        echo '</script>';
    } else {
        $query2 = Yii::app()->db->createCommand("SELECT * FROM users WHERE username = '$username'")->queryAll();
        $count = count($query2);
        
        if($count > 0){
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/user&result=20"';
            echo '</script>';
        } else {
            if($_POST['password'] == ""){
            $sql = "UPDATE users SET username = '$username',  keterangan = '$keterangan',  level = '$level',  modified_time = '$currentdate',  modified_by = '$id' WHERE id=".$idusers;
            } else {
                $password = md5($_POST['password']);
                $sql = "UPDATE users SET username = '$username', keterangan = '$keterangan', level = '$level', modified_time = '$currentdate',  modified_by = '$id', password = '$password' WHERE id=".$idusers;
            }
            
            $command=$connection->createCommand($sql);
            $command->execute();
            echo'
            <script type="text/javascript">
            window.location = "index.php?r=master/user&result=40"';
            echo '</script>';
        }
    }
    
} else {
    echo'
    <script type="text/javascript">
    window.location = "index.php"';
    echo '</script>';  
}
        
        
