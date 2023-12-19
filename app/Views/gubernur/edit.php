<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form ubah Data Komik</h2>
                <form action="/riwayat/update/<?= $daerah['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value=" <?= $daerah['slug']; ?>">
                    <div class="row mb-3">
                        <label for="nama_gubernur" class="col-sm-2 col-form-label">nama_gubernur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_gubernur" name="nama_gubernur"
                                value="<?= $daerah['nama_gubernur']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun_menjabat" class="col-sm-2 col-form-label">tahun_menjabat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun_menjabat" name="tahun_menjabat"
                                value="<?= $daerah['tahun_menjabat']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="periode" class="col-sm-2 col-form-label">periode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="periode" name="periode"
                                value="<?= $daerah['periode']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="wakil_gubernur" class="col-sm-2 col-form-label">wakil_gubernur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="wakil_gubernur" name="wakil_gubernur"
                                value="<?= $daerah['wakil_gubernur']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="asal_partai" class="col-sm-2 col-form-label">asal_partai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal_partai" name="asal_partai"
                                value="<?= $daerah['asal_partai']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>