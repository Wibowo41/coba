<?php
$model= $_POST['model'];
$bagian = $_POST['bagian'];
$status = $_POST['status'];
$qty = $_POST['qty'];
$ket = $_POST['ket'];
$pic = $_POST['pic'];
$salesorder = $_POST['salesorder'];
$workingorder = $_POST['workingorder'];
$currentdate = date("Y-m-d H:i:s");
$iduser=Yii::app()->user->id;
if($_POST['kategori'] == '10'){
    $kategori = 'OKRG';
    $identifikasi = "";
    //$urlback = "transaksi/ok";
} else if($_POST['kategori'] == '15'){
    $kategori = 'OKRW';
    $identifikasi = $_POST['identifikasi'];
    //$urlback = "transaksi/rework";
}  else if($_POST['kategori'] == '20'){
    $kategori = 'RW';
    $identifikasi = $_POST['identifikasi'];
    //$urlback = "transaksi/rework";
} else if($_POST['kategori'] == '30'){
    $kategori = 'RJRW';
    $identifikasi = $_POST['identifikasi'];
    //$urlback = "transaksi/rejectrework";
} else if($_POST['kategori'] == '40'){
    $kategori = 'RJRG';
    $identifikasi = $_POST['identifikasi'];
    //$urlback = "transaksi/rejectreguler";
} else if($_POST['kategori'] == '50'){
    $kategori = 'RJFB';
    $identifikasi = $_POST['identifikasi'];
    //$urlback = "transaksi/rejectfeedback";
}

$command= Yii::app()->db->createCommand("INSERT INTO transaksi (model, bagian_proses, identifikasi, sales_order, working_order, kategori, status, qty, ket_qty, pic, waktu_transaksi, created_by)VALUES(:model, :bagian_proses, :identifikasi, :sales_order, :working_order, :kategori, :status, :qty, :ket_qty, :pic, :waktu_transaksi, :created_by)");
$command->bindValue(':model', $model);
$command->bindValue(':bagian_proses', $bagian);
$command->bindValue(':identifikasi', $identifikasi);
$command->bindValue(':sales_order', $salesorder);
$command->bindValue(':working_order', $workingorder);
$command->bindValue(':kategori', $kategori);
$command->bindValue(':status', $status);
$command->bindValue(':qty', $qty);
$command->bindValue(':ket_qty', $ket);
$command->bindValue(':pic', $pic);
$command->bindValue(':waktu_transaksi', $currentdate);
$command->bindValue(':created_by', $iduser);
$sql_result = $command->execute();

/*echo'
<script type="text/javascript"> 
window.location = "index.php?r="'.$urlback;
echo '</script>';
*/
