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
        function hitungGaji($gol,$masakerja){
            if ($gol == "A"){
                if  ($masakerja < 10){
                    $gaji = "5000000";
                } else {
                    $gaji = "700000";
                }
            } elseif ($gol == "B"){
                if ($masakerja < 10) {
                    $gaji = "6000000";
                } else {
                    $gaji = "8000000";
                }
            } else {
                $gaji = "Maaf Nilai Yang Dimasukkan Tidak Sesuai. Terima Kasih :)";
            }
            return  $gaji;
        }

        // function hasil($gol,$masakerja) {

        //     return "Anda Karyawan dengan golongan ".$gol." Dengan Masa Kerja Selama ".$masakerja." dan Gaji Sebesar ".  hitungGaji($gol,$masakerja);

        // }
        
        // echo hitungGaji

    ?>


    <div class="container mt-5">
        <?php
            echo "<h4> Peraktikum Fungction </h4>";
        ?>
        <h2><?php 
        $golongan = 'A';
        $masakerjanya = 11;
        echo "Anda GOlongan ".$golongan." Dengan masa kerja ". $masakerjanya . " Tahun dan Gaji Anda : ". hitungGaji($golongan,$masakerjanya)

        ?></h2>
        <hr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>