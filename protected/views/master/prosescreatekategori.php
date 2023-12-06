<?php
if(isset($_POST['kategori'])){
    $query= Yii::app()->db->createCommand("SELECT * FROM master_kategori WHERE kode_kategori = '$_POST[kategori]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/kategori&result=20"';
        echo '</script>';
    } else {
        $codekategori = $_POST['kategori'];
        
        if($_POST['kategori'] == 'OKRG'){
            $namakategori = 'OKE REGULER';
        } else if($_POST['kategori'] == 'OKRW'){
            $namakategori = 'OKE REWORK';
        }  else if($_POST['kategori'] == 'RW'){
            $namakategori = 'REWORK';
        } else if($_POST['kategori'] == 'RJRW'){
            $namakategori = 'REJECT REWORK';
        } else if($_POST['kategori'] == 'RJRG'){
            $namakategori = 'REJECT REGULER';
        } else if($_POST['kategori'] == 'RJFB'){
            $namakategori = 'REJECT FEEDBACK';
        } else{}
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_kategori (kode_kategori, nama_kategori, created_time, created_by)VALUES(:kode_kategori, :nama_kategori, :created_time, :created_by)");
        $command->bindValue(':kode_kategori', $codekategori);
        $command->bindValue(':nama_kategori', $namakategori);
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=master/kategori&result=10"';
        echo '</script>';
    }

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

