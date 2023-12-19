<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        /* Add custom styles here */
        .mt-2 {
            margin-top: 2rem;
        }

        .center {
            text-align: center;
        }

        .table td {
            border: 1px solid #dee2e6;
            width: 50%;
            /* Set width for each column */
        }

        .table th,
        .table td {
            text-align: left;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 mb-4 center">Detail Komik</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Gubernur</td>
                            <td>
                                <?= $daerah['nama_gubernur'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tahun Menjabat</td>
                            <td>
                                <?= $daerah['tahun_menjabat'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Periode</td>
                            <td>
                                <?= $daerah['periode'] ?> tahun
                            </td>
                        </tr>
                        <tr>
                            <td>Wakil Gubernur</td>
                            <td>
                                <?= $daerah['wakil_gubernur'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Partai</td>
                            <td>
                                <?= $daerah['asal_partai'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="/riwayat/edit/<?= $daerah['slug']; ?>" class="btn btn-warning">Edit</a>
                <br><br>
                <a href="/">Kembali ke data riwayat</a>
            </div>
        </div>
    </div>
</body>

</html>