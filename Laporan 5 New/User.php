<?php 
    include "config.php";
    $sql = "SELECT * FROM user ORDER BY id ASC";
    $stat = $conn->prepare($sql);
    $stat->execute();
    $user = $stat->fetchAll(PDO::FETCH_OBJ); 
?>
<?php include "header.php"; ?>
<div class="container "style="margin-top:50px;">
        <h2>User</h2>
        <a href="" class="btn btn-success">Tambah Data </a>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID Mahasiswa</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
            <?php foreach ($user as $person): ?>
                <tr>
                    <td><?= $person->id ?></td>
                    <td><?= $person->mahasiswa_id ?></td>
                    <td><?= $person->username ?></td>
                    <td><?= $person->password ?></td>
                    <td>
                        <a href="#" class="btn btn-warning"> Edit </a>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
    </div>
    <?php include "footer.php"; ?>
</div>