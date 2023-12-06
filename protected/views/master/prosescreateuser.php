<?php
if(isset($_POST['username']) AND isset($_POST['password']) AND isset($_POST['level'])){
    
    
    $query= Yii::app()->db->createCommand("SELECT * FROM users WHERE username = '$_POST[username]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/user&result=20"';
        echo '</script>';
    } else {
        $username= $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $keterangan = $_POST['keterangan'];
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO users (username, password, level, keterangan, is_active, created_time, created_by)VALUES(:username, :password, :level, :keterangan, :is_active, :created_time, :created_by)");
        $command->bindValue(':username', $username);
        $command->bindValue(':password', $password);
        $command->bindValue(':level', $level);
        $command->bindValue(':keterangan', $keterangan);
        $command->bindValue(':is_active', "1");
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/user&result=10"';
        echo '</script>';
    }

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

