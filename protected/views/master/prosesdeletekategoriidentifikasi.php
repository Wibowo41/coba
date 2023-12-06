<?php
if(isset($_GET['auth1']) AND isset($_GET['auth2'])){
    
    $idmasterkategoriidentifikasi = $this->base64_decrypt($_GET['auth2'], $this->key());
    $idkategori = $this->base64_decrypt($_GET['auth1'], $this->key());
    
    Yii::app()->db->createCommand("DELETE FROM master_kategori_identifikasi WHERE id_master_kategori_identifikasi='$idmasterkategoriidentifikasi'")->execute();
    
    ?>
        <script>
        window.location.href = 'index.php?r=master/kategoriidentifikasi&result=30&auth=<?php echo $this->base64_encrypt($idkategori, $this->key());?>';
        </script>
    <?php

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}


