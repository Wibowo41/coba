<?php
    $qrow = "SELECT * FROM transaksi tr LEFT JOIN master_identifikasi mi ON tr.identifikasi = mi.kode_identifikasi LEFT JOIN master_bagian mb ON tr.bagian_proses = mb.code_master_proses$kondisi";
    $row = Yii::app()->db->createCommand($qrow)->queryAll();
    $totalrow = count($row);
    
    $i=1;
    $allrow = ceil($totalrow/$record_per_page);
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item pagination_first_result">
            <a class="page-link" tabindex="-1" style="cursor: pointer;">&laquo;</a>
        </li>
        <li class="page-item pagination_prev_result"><a class="page-link" style="cursor: pointer;">Previous</a></li>
        <li class="page-item disabled"><a class="page-link"><span class="pg_result"><?php echo $page; ?></span> / <?php echo $allrow; ?></a></li>
        <li class="page-item pagination_next_result" style="cursor: pointer;" data-allrecords_result="<?php echo $allrow; ?>"><a class="page-link">Next</a></li>
        <li class="page-item">
          <a class="page-link pag_last_result" tabindex="-1" style="cursor: pointer;" data-allrecords_result="<?php echo $allrow; ?>">&raquo;</a>
        </li>
    </ul>
</nav>
<label class="badge badge-info">Data : <?php echo $totalrow; ?></label>
<table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>Model</th>
          <th>Kategori</th>
          <th>Identifikasi</th>
          <th>Bagian</th>
          <th>QTY</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Sales Order</th>
          <th>PIC</th>
          
        </tr>
    </thead>
    <tbody>
        <?php
            $no=($page*$record_per_page)-$record_per_page+1;
            if($totalrow > 0){
                $query = "SELECT * FROM transaksi tr LEFT JOIN master_identifikasi mi ON tr.identifikasi = mi.kode_identifikasi LEFT JOIN master_bagian mb ON tr.bagian_proses = mb.code_master_proses$kondisi ORDER BY $sortby $sort limit $start_from, $record_per_page";
                $query= Yii::app()->db->createCommand($query)->queryAll();
            $array=array();
            
            foreach($query as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $array[]=$row['model']; ?></td>
            <td>
                <?php
                    if($array[]=$row['kategori'] == "OKRW"){
                        echo 'OK REWORK';
                    } else if($array[]=$row['kategori'] == "OKRG"){
                        echo 'OK REGULER';
                    } else if($array[]=$row['kategori'] == "RW"){
                        echo 'REWORK';
                    } else if($array[]=$row['kategori'] == "RJRG"){
                        echo 'REJECT REGULER';
                    } else if($array[]=$row['kategori'] == "RJRW"){
                        echo 'REJECT REWORK';
                    } else if($array[]=$row['kategori'] == "RJFB"){
                        echo 'REJECT FEEDBACK';
                    } 
                ?>
            </td>
            <td><?php echo $array[]=$row['nama_identifikasi']; ?></td>
            <td><?php echo $array[]=$row['keterangan_master_proses']; ?></td>
            <td><?php echo $array[]=$row['qty']; ?></td>
            <td><?php echo $array[]=$row['status']; ?></td>
            <td><label class="badge badge-warning"><?php echo date('d-m-Y', strtotime($array[]=$row['waktu_transaksi'])); ?></label></td>
            <td><label class="badge badge-warning"><?php echo date('H:i', strtotime($array[]=$row['waktu_transaksi'])); ?></label></td>
            <td><?php echo $array[]=$row['sales_order']; ?></td>
            <td><?php echo $array[]=$row['pic']; ?></td>
            
        </tr>
            <?php }} else {?>
        <tr align="center">
            <td colspan="10">Data Tidak Ditemukan</td>
        </tr>
            <?php } ?>
    </tbody>
</table>