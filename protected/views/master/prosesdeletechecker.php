<?php
if(isset($_GET['auth'])){
    
    $idchecker = $this->base64_decrypt($_GET['auth'], $this->key());
    
    Yii::app()->db->createCommand("DELETE FROM master_checker WHERE id_checker='$idchecker'")->execute();
    
    echo'
    <script type="text/javascript"> 
    window.location = "index.php?r=master/checker&result=30"';
    echo '</script>';

} else {
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}


