<?php
include_once('koneksi.php');
$unit_kerja = $dbh->query('SELECT * FROM unit_kerja');

$id = $_GET['id'];
$paramedik = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Paramedik</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="paramedik_update.php" method="post">
        <!-- Input hidden untuk menyimpan ID pasien -->
        <input type="hidden" name="id" value="<?= $paramedik['id'] ?>">

        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= $paramedik['gender'] == 'L' ? 'checked' : '' ?> required="required">
                    <label for="gender_0" class="custom-control-label">L</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= $paramedik['gender'] == 'P' ? 'checked' : '' ?> required="required">
                    <label for="gender_1" class="custom-control-label">P</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <input id="kategori" name="kategori" type="text" class="form-control" required="required" value="<?= $paramedik['kategori'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">Telpon</label>
            <div class="col-8">
                <input id="telpon" name="telpon" type="text" class="form-control" required="required" value="<?= $paramedik['telpon'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"> <?= $paramedik['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label>
            <div class="col-8">
                <input id="unit_kerja_id" name="unit_kerja_id" type="text" class="form-control" required="required" value="<?= $paramedik['unit_kerja_id'] ?>">
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