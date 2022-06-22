<?php
    session_start();
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ruangan = $_POST['Ruangan'];
        if ( $nama && $ruangan ){
            $_SESSION['nama'] = $_POST['nama'];                    
            $_SESSION['Ruangan'] = $_POST['Ruangan'];  
        } 
    }
?>

<?php include "header.php"; ?>

<div class="container mt-5">
        <div class="margin-top text-center">
            <h2>Halaman Lobby</h2>
            <?php 
                echo "anda sudah membelli tiket  : ".$nama . "<br>";
                echo "Ruangan :". $ruangan;
                ?>
        
        </div>

        <div class="col-sm-6 mt-3">
                <form method="POST">
                	<div class="form-group row">
                        <label for="n" class = "col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  id="nama" name="nama" placeholder="Nama">
                        </div>
                    </div>

                    <div class="form-grup">
                        <input type="radio" name="Ruangan" value ="Ruangan 1"> Ruangan 1
                        <input type="radio" name="Ruangan" value ="Ruangan 2"> Ruangan 2
                        <input type="radio" name="Ruangan" value ="Ruangan 3"> Ruangan 3
                    </div>

                    <div class="form-grup">
                        <button class="btn btn-success" value="submit" type="submit" name="submit"> Beli Tiket </button>
                    </div>
            </form>
        </div>
</div>