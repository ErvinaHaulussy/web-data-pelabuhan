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
            <div class="col">
                <a href="/riwayat/create" class="btn btn-primary mt-3">Tambah Data Gubernur</a>
                <h1 class="mt-2">Daftar Komik</h1>
                <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Gubernur</th>
                            <th scope="col">Tahun Menjabat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($daerah as $d): ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++; ?>
                                </th>
                                <td>
                                    <?= $d['nama_gubernur']; ?>
                                </td>
                                <td>
                                    <?= $d['tahun_menjabat']; ?>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="/riwayat/<?= $d['slug']; ?>" class="btn btn-success mx-2">
                                            <i class="fas fa-eye"></i> Detail
                                        </a>
                                        <form action="/riwayat/<?= $d['id']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('apakah anda yakin?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>