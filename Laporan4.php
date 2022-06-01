<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <div class="container mt-5">
        <?php echo "<h4>Praktikum GET dan POST</h4>"?>
        <hr>
        <form method="POST" action="">
            <p> Nama </p>
            <input type="text" name="nama">
            <br>
            <p>Jabatan</p>
            <select name="jabatan" id="">
                <option>Junior Programer</option>
                <option>Senior Programer</option>
                <option>Chief Technology Officerr</option>
                <option>Manager</option>
            </select>
            <p>Skor Kinerja</p>
            <input type="text" name= "SK">
            <br>
            <br>
            <button type = "submit" value = "submit" name = "submit"> Cek </button>
        </form>
        <hr>
        
        
    </div> 

    <?php
       if($_POST){
        echo "Nama     : ". $_POST['nama']. "<br>";
        echo "Jabatan : ".$_POST['jabatan']."<br>";
        echo "Skor Kinerja  : ". $_POST['SK']. "<br>";
        echo "Gaji Pokok : Rp.".gaji();
    }

    function gaji(){
        if($_POST['jabatan'] == "Junior Programer"){
            $gapok = "4000000";
            if ((float)$_POST['SK'] <= 50 ){
                (float)$total_gaji = 50/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 60 ){
                (float)$total_gaji = 60/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 70 ){
                (float)$total_gaji = 70/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 80 ){
                (float)$total_gaji = 80/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 90 ){
                (float)$total_gaji = 90/100 * (float)$gapok;
            }else{
                (float)$total_gaji = (float)$gapok;
            }
        }elseif($_POST['jabatan'] == "Senior Programer") {
            $gapok = "6000000";
            if ((float)$_POST['SK'] <= 50 ){
                (float)$total_gaji = 50/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 60 ){
                (float)$total_gaji = 60/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 70 ){
                (float)$total_gaji = 70/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 80 ){
                (float)$total_gaji = 80/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 90 ){
                (float)$total_gaji = 90/100 * (float)$gapok;
            }else{
                (float)$total_gaji = (float)$gapok;
            }
        }elseif($_POST['jabatan'] == "Chief Technology Officerr") {
            $gapok = "8000000";
            if ((float)$_POST['SK'] <= 50 ){
                (float)$total_gaji = 50/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 60 ){
                (float)$total_gaji = 60/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 70 ){
                (float)$total_gaji = 70/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 80 ){
                (float)$total_gaji = 80/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 90 ){
                (float)$total_gaji = 90/100 * (float)$gapok;
            }else{
                (float)$total_gaji = (float)$gapok;
            }
        }elseif($_POST['jabatan'] == "Manager") {
            $gapok = "10000000";
            if ((float)$_POST['SK'] <= 50 ){
                (float)$total_gaji = 50/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 60 ){
                (float)$total_gaji = 60/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 70 ){
                (float)$total_gaji = 70/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 80 ){
                (float)$total_gaji = 80/100 * (float)$gapok;
            }elseif((float)$_POST['SK'] <= 90 ){
                (float)$total_gaji = 90/100 * (float)$gapok;
            }else{
                (float)$total_gaji = (float)$gapok;
            }
        }else{
            $total_gaji = "Anda Di Pecat T_T";
        }
        return $total_gaji;
    }

    ?> 
</body>
</html>