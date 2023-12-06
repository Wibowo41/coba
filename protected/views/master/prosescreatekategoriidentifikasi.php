<?php
if(isset($_POST['auth']) AND isset($_POST['identifikasi'])){
    $kodekategori = $this->base64_decrypt($_POST['auth'], $this->key());
    $query= Yii::app()->db->createCommand("SELECT * FROM master_kategori_identifikasi WHERE kode_kategori = '$kodekategori' AND kode_identifikasi = '$_POST[identifikasi]'")->queryAll();
    $totalrow = count($query);
    
    if($totalrow > 0){
        ?>
            <script>
            window.location.href = 'index.php?r=master/kategoriidentifikasi&result=20&auth=<?php echo $_POST['auth'];?>';
            </script>
        <?php
        
    } else {
        $currentdate = date("Y-m-d H:i:s");
        $iduser=Yii::app()->user->id;

        $command= Yii::app()->db->createCommand("INSERT INTO master_kategori_identifikasi (kode_kategori, kode_identifikasi, created_time, created_by)VALUES(:kode_kategori, :kode_identifikasi, :created_time, :created_by)");
        $command->bindValue(':kode_kategori', $kodekategori);
        $command->bindValue(':kode_identifikasi', $_POST['identifikasi']);
        $command->bindValue(':created_time', $currentdate);
        $command->bindValue(':created_by', $iduser);
        $sql_result = $command->execute();

        ?>
            <script>
            window.location.href = 'index.php?r=master/kategoriidentifikasi&result=10&auth=<?php echo $_POST['auth'];?>';
            </script>
        <?php
    }

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}

