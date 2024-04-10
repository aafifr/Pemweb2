<?php
include_once('koneksi.php');

$id = $_GET['id'];
$unit_kerja_detail = $dbh->query("SELECT * FROM unit_kerja WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4">
    <h3 class="mt-4">Edit Unit Kerja</h3>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="uk_update.php" method="post">
        <!-- Input hidden untuk menyimpan ID unit kerja -->
        <input type="hidden" name="id" value="<?= $unit_kerja_detail['id'] ?>">

        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $unit_kerja_detail['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>
