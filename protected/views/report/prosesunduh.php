<?php
if(isset($_POST['tglawal']) AND isset($_POST['tglakhir'])){

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=report.xls");

$jamawal = $_POST['jamawal'];
$jamakhir = $_POST['jamakhir'];
$tglawal = date("Y-m-d", strtotime($_POST['tglawal']))." ".$jamawal.":00";
$tglakhir = date("Y-m-d", strtotime($_POST['tglakhir']))." ".$jamakhir.":59";
?>

<?php
    $array=array();
    $qkategori= Yii::app()->db->createCommand("SELECT * FROM master_kategori")->queryAll();
    $totalkategori = count($qkategori);
    
    $lineproses = $_POST['lineproses'];
    if($_POST['lineproses'] == 'all'){
        $querylineproses = "";
        $judul = "ALL PROSES";
    } else {
        $rownamaproses = [];
        $namaproses= Yii::app()->db->createCommand("SELECT * FROM master_bagian WHERE code_master_proses = '$lineproses'")->queryAll();
        foreach($namaproses as $rowproses){
            $rownamaproses['namaproses'] = $array[]=$rowproses['keterangan_master_proses'];
        }
        
        $querylineproses = "AND bagian_proses = '$lineproses'";
        $judul = $rownamaproses['namaproses'];
    }
?>
<table>
    <tr>
        <th>COSMOPROF INDOKARYA</th>
    </tr>
    <tr>
        <th>Report Inpeksi</th>
    </tr>
    <tr>
        <th><?php echo $_POST['tglawal']." s/d ".$_POST['tglakhir'] ?></th>
    </tr>
    
    <tr>
        <th><?php echo "LINE PROSES : ".$judul ?></th>
    </tr>
</table>


<table border="1px">
    <tr>
      <th rowspan="2">Model</th>
      <?php
      $rowarray = [];
      $rowarraycount = [];
      $i=0;
      foreach($qkategori as $rowkategori){
          $kodekategori = $array[]=$rowkategori['kode_kategori'];
          $qkategori_identifikasi = Yii::app()->db->createCommand("SELECT * FROM master_kategori_identifikasi WHERE kode_kategori = '$kodekategori'")->queryAll();
          $totalkategori_identifikasi = count($qkategori_identifikasi);
      if($totalkategori_identifikasi != 0){
        $rowarray[] = [
            'KODEKATEGORI' => $kodekategori
        ];
      ?>
      <th colspan="<?php echo $totalkategori_identifikasi; ?>"><?php echo $array[]=$rowkategori['nama_kategori']; ?></th>
      <?php }} ?>
    </tr>
    
    <tr>
        <?php
           $rowarray_identifikasi = [];
           for($i=0; $i< count($rowarray); $i++) {
           $kdktg = $rowarray[$i]['KODEKATEGORI'];
           $qkategori_identifikasi1= Yii::app()->db->createCommand("SELECT mi.nama_identifikasi,mi.kode_identifikasi FROM master_kategori_identifikasi mki LEFT JOIN master_identifikasi mi ON mki.kode_identifikasi = mi.kode_identifikasi WHERE kode_kategori = '$kdktg'")->queryAll();
           foreach($qkategori_identifikasi1 as $rowkategori_identifikasi1){
           $rowarray_identifikasi[] = [
              'KODEKATEGORI' => $kdktg,
              'KODEIDENTIFIKASI' => $array[]=$rowkategori_identifikasi1['kode_identifikasi']
          ];
        ?>
            <th><?php echo $array[]=$rowkategori_identifikasi1['nama_identifikasi'];  ?></th>
        <?php }} ?>
    </tr>
    
    <tr>
        <th>Total</th>
        
        <?php
        for($i=0; $i< count($rowarray_identifikasi); $i++) {
        $ktg = $rowarray_identifikasi[$i]["KODEKATEGORI"];
        
        if($rowarray_identifikasi[$i]["KODEIDENTIFIKASI"] == "OKE"){
            $idnt = "";
        } else {
            $idnt = $rowarray_identifikasi[$i]["KODEIDENTIFIKASI"];
        }
        
        $qtotal= Yii::app()->db->createCommand("SELECT sum(qty) AS total FROM transaksi WHERE waktu_transaksi BETWEEN '$tglawal' AND '$tglakhir' AND kategori = '$ktg' AND identifikasi = '$idnt'$querylineproses")->queryAll();
        foreach($qtotal as $rowtotal){
        ?>
        <th class="text2">
            <?php
                if($array[]=$rowtotal['total'] < 1){
                    echo 0;
                } else {
                    echo $array[]=$rowtotal['total'];
                }
            ?>
        </th>
        <?php }} ?>
    </tr>
    
    <tr>
        <th style="background-color: black">.</th>
        
        <?php
        for($i=0; $i< count($rowarray_identifikasi); $i++) {
        $ktg = $rowarray_identifikasi[$i]["KODEKATEGORI"];
        if($rowarray_identifikasi[$i]["KODEIDENTIFIKASI"] == "OKE"){
            $idnt = "";
        } else {
            $idnt = $rowarray_identifikasi[$i]["KODEIDENTIFIKASI"];
        }
        $qtotal= Yii::app()->db->createCommand("SELECT sum(qty) AS total FROM transaksi WHERE waktu_transaksi BETWEEN '$tglawal' AND '$tglakhir' AND kategori = '$ktg' AND identifikasi = '$idnt'")->queryAll();

        foreach($qtotal as $rowtotal){
        ?>
        <th style="background-color: black">.</th>
        <?php }} ?>
    </tr>
    
     <?php
        $qmodel = Yii::app()->db->createCommand("SELECT model FROM transaksi GROUP BY model")->queryAll();
        foreach($qmodel as $rowmodel){
    ?>
    <tr>
        <th><?php echo $array[]=$rowmodel['model']; ?></th>
        
        <?php
        for($i=0; $i< count($rowarray_identifikasi); $i++) {
        $mdl = $array[]=$rowmodel['model'];
        $ktg = $rowarray_identifikasi[$i]["KODEKATEGORI"];
        if($rowarray_identifikasi[$i]["KODEIDENTIFIKASI"] == "OKE"){
            $idnt = "";
        } else {
            $idnt = $rowarray_identifikasi[$i]["KODEIDENTIFIKASI"];
        }
        $qtotal_model= Yii::app()->db->createCommand("SELECT sum(qty) AS total FROM transaksi WHERE waktu_transaksi BETWEEN '$tglawal' AND '$tglakhir' AND kategori = '$ktg' AND identifikasi = '$idnt' AND model = '$mdl'$querylineproses")->queryAll();
        foreach($qtotal_model as $rowtotal_model){
        ?>
        <th>
            <?php
            if($array[]=$rowtotal_model['total'] == 0){
                echo 0;
            } else {
                echo $array[]=$rowtotal_model['total'];
            }
            ?>
        </th>
        <?php }} ?>
    </tr>
<?php }} else { 
    echo'
    <script type="text/javascript"> 
    window.location = "index.php"';
    echo '</script>';
}
?>
    
</table>

