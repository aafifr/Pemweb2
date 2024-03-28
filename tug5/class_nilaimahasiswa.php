<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <h2 class="mt-4 text-center">Form Nilai Ujian</h2>
    <hr>
    <form class="container col-5 bg-body-tertiary p-3 mb-3 rounded" action="proses_nilai.php" method="post">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Plilih MK</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="-- pilih mata kuliah --">-- pilih mata kuliah --</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Statistika">Statistika</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>

    <br>

</body>

</html>