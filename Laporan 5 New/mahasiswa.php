<?php 
    include "config.php";
    $sql = "SELECT * FROM mahasiswa ORDER BY id ASC";
    $stat = $conn->prepare($sql);
    $stat->execute();
    $mhs = $stat->fetchAll(PDO::FETCH_OBJ); 
?>
<?php include "header.php"; ?>
<div class="container "style="margin-top:50px;">
        <h2>Mahasiswa</h2>
        <a href="" class="btn btn-success">Tambah Data </a>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th width="10%">photo</th>
            </tr>
            <?php foreach ($mhs as $person): ?>
                <tr>
                    <td><?= $person->id ?></td>
                    <td><?= $person->nim ?></td>
                    <td><?= $person->nama ?></td>
                    <td><?= $person->prodi ?></td>
                    <td><img calss="img-fluid" style="width:50px" src="asset/img/<?= $person->photo ?>" alt=""></td>
                    <td>
                        <a href="edit.php?id=<?= $person->id ?>" class="btn btn-warning">Edit</a>
                        <!-- <a href="#" class="btn btn-warning"> Edit </a>  -->
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
    </div>
    <?php include "footer.php"; ?>
</div>