<?php
class MasterController extends Controller
{
    public function actionIndex()
    {
        
    }
    
    public function actionUser()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('user');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreateuser()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreateuser');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeleteuser()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeleteuser');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionFormedituser()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('formedituser');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesedituser()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesedituser');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionChecker()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('checker');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreatechecker()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreatechecker');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeletechecker()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeletechecker');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionFormeditchecker()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('formeditchecker');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProseseditchecker()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('proseseditchecker');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionWorkingorder()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('wo');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreateworkingorder()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreateworkingorder');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionFormeditworkingorder()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('formeditworkingorder');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProseseditworkingorder()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('proseseditworkingorder');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeleteworkingorder()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeleteworkingorder');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProses()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('proses');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreateproses()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreateproses');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionFormeditproses()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('formeditproses');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProseseditproses()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('proseseditproses');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeleteproses()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeleteproses');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionKategori()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('kategori');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreatekategori()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreatekategori');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionKategoriidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('kategoriidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreatekategoriidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreatekategoriidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeletekategoriidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeletekategoriidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionIdentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('identifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsescreateidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosescreateidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionFormeditidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('formeditidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProseseditidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('proseseditidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesdeleteidentifikasi()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('prosesdeleteidentifikasi');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }

}