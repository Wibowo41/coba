<?php
class ResultController extends Controller
{
    public function actionIndex()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('index');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionPaginationresult()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            
            if($_POST['model'] == ""){
                $model = "";
            } else {
                $mod = $_POST['model'];
                $model = " AND tr.model = '$mod'";
            }
            
            if($_POST['status'] == "ALL"){
                $status = "";
            } else {
                $stat = $_POST['status'];
                $status = " AND tr.status = '$stat'";
            }
            
            if($_POST['bagian'] == "ALL"){
                $bagian = "";
            } else {
                $bag = $_POST['bagian'];
                $bagian = " AND tr.bagian_proses = '$bag'";
            }
            
            if($_POST['kategori'] == "ALL"){
                $kategori = "";
            } else {
                $kat = $_POST['kategori'];
                $kategori = " AND tr.kategori = '$kat'";
            }
            
            if($_POST['identifikasi'] == "ALL"){
                $identifikasi = "";
            } else {
                $iden = $_POST['identifikasi'];
                $identifikasi = " AND tr.identifikasi = '$iden'";
            }
            
            if($_POST['sortby'] == "10"){
                $sortby = "kategori";
            } else if($_POST['sortby'] == "20"){
                $sortby = "mi.nama_identifikasi";
            } else if($_POST['sortby'] == "30"){
                $sortby = "bagian_proses";
            } else if($_POST['sortby'] == "40"){
                $sortby = "model";
            } else if($_POST['sortby'] == "50"){
                $sortby = "JUMLAH";
            } else if($_POST['sortby'] == "60"){
                $sortby = "tr.waktu_transaksi";
            } else {
                $sortby = "tr.waktu_transaksi";
            }
            
            $sort = $_POST['sort'];
            
            if($_POST['tglawal'] == "" || $_POST['tglakhir'] == ""){
                $tglawal = date("Y-m-d")." 00:00:00";
                $tglakhir = date("Y-m-d")." 23:59:59";
                $kondisi = " WHERE tr.waktu_transaksi BETWEEN '$tglawal' AND '$tglakhir'$model$status$bagian$kategori$identifikasi";
            } else {
                $tglawal = date("Y-m-d", strtotime($_POST['tglawal']))." 00:00:00";
                $tglakhir = date("Y-m-d", strtotime($_POST['tglakhir']))." 23:59:59";
                $kondisi = " WHERE tr.waktu_transaksi BETWEEN '$tglawal' AND '$tglakhir'$model$status$bagian$kategori$identifikasi";
            }
            
            $record_per_page = 10;
            
            // PAGE
            if(isset($_POST["page"])){
                $page = (int)$_POST["page"];
            } else {
                $page = 1;
            }
            
            $start_from = ($page - 1) * $record_per_page;
            
            $this->renderPartial('table', 
                array(
                    'record_per_page'=>$record_per_page,
                    'page'=>$page,
                    'start_from'=>$start_from,
                    'kondisi'=>$kondisi,
                    'sortby'=>$sortby,
                    'sort'=>$sort,
                )
            );
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }

}