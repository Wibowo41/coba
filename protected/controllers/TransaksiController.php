<?php
class TransaksiController extends Controller
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
    
    public function actionOkreguler()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('okreguler');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionOkrework()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('okrework');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionRework()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('rework');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionRejectreguler()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('rejectreguler');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionRejectrework()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('rejectrework');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionRejectfeedback()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('rejectfeedback');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreate()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $this->render('proses_create');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionSearchbagian()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $codeproses = $_POST['codeproses'];
            $array=array();
            $rowhasil = [];
            $query = Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE code_master_proses = '$codeproses'")->queryAll();
            if(count($query) < 1){
                $hasil = 0;
                $namahasil = "";
            } else {
                foreach($query as $row){
                    $rowhasil['nama_hasil'] = " : ".$array[]=$row['keterangan_master_proses'];
                    $rowhasil['code_hasil'] = $array[]=$row['code_master_proses'];
                }
                $hasil = $rowhasil['code_hasil'];
                $namahasil = $rowhasil['nama_hasil'];
            }
                $arrFromDb = array(
                    'hasil' => $hasil,
                    'namahasil' => $namahasil
                );
                echo json_encode( $arrFromDb ); exit();
        }
    }
    
    public function actionCekmaxqty()
    {
        if(Yii::app()->user->isMember() || Yii::app()->user->isAdmin()) {
            $codeproses = $_POST['bagian'];
            $codeproses = $_POST['identifikasi'];
            $codeproses = $_POST['codeproses'];
            $codeproses = $_POST['codeproses'];
            $array=array();
            $rowhasil = [];
            $query = Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE code_master_proses = '$codeproses'")->queryAll();
            if(count($query) < 1){
                $hasil = 0;
                $namahasil = "";
            } else {
                foreach($query as $row){
                    $rowhasil['nama_hasil'] = " : ".$array[]=$row['keterangan_master_proses'];
                    $rowhasil['code_hasil'] = $array[]=$row['code_master_proses'];
                }
                $hasil = $rowhasil['code_hasil'];
                $namahasil = $rowhasil['nama_hasil'];
            }
                $arrFromDb = array(
                    'hasil' => $hasil,
                    'namahasil' => $namahasil
                );
                echo json_encode( $arrFromDb ); exit();
        }
    }

}