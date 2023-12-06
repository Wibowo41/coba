<?php
    $id=Yii::app()->user->id;
    //if(Yii::app()->user->isAdmin()) {
    if(isset($id)) {
        
    //MENGAMBIL DATA USERNAME LOGIN
    $query = Yii::app()->db->createCommand("SELECT * FROM users WHERE id = '$id'")->queryAll();
    $array=array();
    $data=[];
    foreach($query as $row){
        $data['username'] = $array[]=$row['username'];
    }
    //MENGAMBIL DATA USERNAME LOGIN
?>

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome <?php echo $data['username']; ?></h3>
          <h6 class="font-weight-normal mb-0">Sistem Informasi Quality Control Siap Membantu Anda!</h6>
        </div>
      </div>
    </div>
</div>
<div class="card-people mt-auto">
    <img src="images/office.jpg" alt="people">
</div>

<?php
    }else{
        echo'
        <script type="text/javascript"> 
        window.location = "index.php?r=site/login"';
        echo '</script>';
    }
?>