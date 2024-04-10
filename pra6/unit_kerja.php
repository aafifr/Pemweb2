<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$unit_kerjas = $dbh->query($query);
?>

<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Unit Kerja</h3>
        <a href="uk_create.php" class="btn btn-primary">
           <i class="fa fa-plus"></i> Unit Kerja
        </a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach ($unit_kerjas as $unit_kerja) {
            $no++;
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $unit_kerja['nama'] ?></td>
                <td>
                    <a href="uk_edit.php?id=<?= $unit_kerja['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-to-square"></i></a>
                    <a href="uk_delete.php?id=<?= $unit_kerja['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>

        <?php } ?>

    </table>
</div>

<?php
include_once('bottom.php');
?>
