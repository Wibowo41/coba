<?php
class ReportController extends Controller
{
    public function actionIndex()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->render('index');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }
    
    public function actionProsesunduh()
    {
        if(Yii::app()->user->isAdmin()) {
            $this->renderPartial('prosesunduh');
        } else {
            echo'
            <script type="text/javascript"> 
            window.location = "index.php"';
            echo '</script>';
        }
    }

}