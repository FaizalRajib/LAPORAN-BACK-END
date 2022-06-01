<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <?php 
        function Denda ($Tgl_Pengembalian, $Tgl_Kembali){
          $Tgl_Pengembalian = date_create_from_format('d-m-Y', $Tgl_Pengembalian);
          $Tgl_Pengembalian = date_format($Tgl_Pengembalian, 'Y-m-d');
          $Tgl_Pengembalian = strtotime($Tgl_Pengembalian);

          $Tgl_Kembali = date_create_from_format('d-m-Y', $Tgl_Kembali);
          $Tgl_Kembali = date_format($Tgl_Kembali, 'Y-m-d');
          $Tgl_Kembali = strtotime($Tgl_Kembali);

          $ket = array();

          for ($i=$Tgl_Pengembalian; $i <= $Tgl_Kembali; $i += (60 * 60 * 24)) {
            if (date('w', $i) !== '0'){
              $ket[] = $i;
            }
          }
          $keterangan = count($ket);
          $total = $keterangan * 5000;
          
          echo "Denda Anda ".$total;
        }
    ?>
<?php 
          function cek($date1,$date2) {
            $d1 = date_create($date1);
            $d2 = date_create($date2);
            $diff = date_diff($d1, $d2);
            $keterlambatan = $diff -> format ("%a");
            $dendaperhari = 5000;
            $totaldenda = $keterlambatan * $dendaperhari;
          return $totaldenda;
          }
        ?>
    <div class="container mt-5">
        <?php
            echo "<h4> Peraktikum Fungction </h4>";
        ?>
        <h2>
        Besarnya denda adalah : <b>
        <?php 
          // echo Denda('11-10-2021','15-10-2021')
           echo cek(date('Y-m-d'),'2022-05-22')
        ?></b>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>