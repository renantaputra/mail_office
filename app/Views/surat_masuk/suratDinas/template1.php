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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Maffice</title>
</head>

<body>
    <table border="0" cellpadding="1">
        <tbody>
            <tr>
                <td colspan="3">
                    <div>
                        <!-- <p><b><strong><img src="/img/logo.png" width="97" height="127" name="graphics1" border="0" hspace="12" />PEMERINTAH KABUPATEN TULUNGAGUNG</strong></p>
                    <p><strong>DINAS PENDAPATAN PENGELOLA KEUANGAN DAN ASET DAERAH</strong></p>
                    <p>Jalan Sultan Agung No.3 Telepon (0355) 322190 Fax -</p>
                    <p><strong>TULUNGAGUNG</strong></b></p>
                    <div>Kode Pos -</div>
                    <hr /> -->
                        <div class="p-center p-bold">
                            <img width="80" height="110" src="/img/logo.png" style="float: left;" />
                            PEMERINTAH KABUPATEN TULUNGAGUNG <br>
                            DINAS PENDAPATAN PENGELOLA KEUANGAN DAN ASET DAERAH <br>
                            Jalan Sultan Agung No.3 Telepon (0355) 322190 Fax - <br>
                            TULUNGAGUNG
                        </div>
                        <p class="p-kanan"> Kode Pos - </p>
                        <hr>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" cellpadding="1">
                        <tbody>
                            <tr>
                                <td width="93">Nomor</td>
                                <td width="8">:</td>
                                <td><?= $surat_masuk['no_surat']; ?></td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>:</td>
                                <td>Surat Dinas</td>
                            </tr>
                            <tr>
                                <td>Lampiran</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <td><?= $surat_masuk['perihal']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <div>Tulungagung,<?= date('d F yy', strtotime($surat_masuk['tgl_surat'])); ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        Kepada Yth, <?= $surat_masuk['nama_lengkap']; ?>
                        <br>
                        Ditempat
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" height="50">
                    <div class="p-justify">
                        <?= $surat_masuk['deskripsi']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="p-kanan" colspan="3">
                    <div><br><br>Kepala Dinas Pendapatan, <br> Pengelolaan Keuangan dan Aset daerah</div>
                    <br><br><br>
                    <div><u>Drs. TRANGGONO DIBJOHARSO,MM</u><br>Kepala Dinas Komunikasi dan Informatika<br />NIP. xxxx xxxx xxxx</div>
                </td>
            </tr>
            <!-- <br>
            <tr>
                <td>
                    <table border="0" cellpadding="1">
                        <tbody>
                            <tr>
                                <td width="93">Tembusan:</td>
                            </tr>
                            <tr>
                                <td>1. .........</td>
                            </tr>
                            <tr>
                                <td>2. .........</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr> -->
        </tbody>
    </table>
</body>

</html>