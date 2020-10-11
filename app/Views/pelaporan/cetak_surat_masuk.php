<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .p-center {
            text-align: center;
        }

        .p-bold {
            font-weight: bold;
        }

        .p-justify {
            text-align: justify;
        }

        .p-kanan {
            text-align: right;
        }

        .p-kiri {
            text-align: left;
        }

        .table {
            border: 1;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN SURAT MASUK</title>
</head>

<body>
    <h2 class="p-center">LAPORAN SURAT MASUK</h2>

    Tanggal <strong><?= $tgl_awal; ?> sampai <?= $tgl_akhir; ?></strong>
    <br>
    <br>
    <table border="1" cellpadding="5">
        <tr class="p-bold" style="background-color: darkgray;">
            <th width="30px">No</th>
            <th>Nomer Surat</th>
            <th>Tanggal Surat</th>
            <th>Nama Pengirim</th>
            <th>Perihal</th>
        </tr>
        <?php foreach ($surat_keluar as $key => $row) { ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $row['no_surat']; ?></td>
                <td><?php echo date('d-m-yy', strtotime($row['tgl_surat'])); ?></td>
                <th><?php echo $row['nama_pengirim'];  ?></th>
                <td><?php echo $row['perihal']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>