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
</head>

<body background="/img/bg1.png">
    <div class="p-center">
        <div class="p-bold">
            PEMERINTAH KABUPATEN TULUNGAGUNG <br>
            DINAS PENDAPATAN, PENGELOLA KEUANGAN DAN ASET DAERAH
        </div>
        Jalan .... No. ........ Telepon ........ Fax ........
        <div class="p-bold">
            TULUNG AGUNG
        </div>
    </div>

    <br>
    <hr>
    <br>

    <div class="p-kanan">
        Tulungagung, <?= date("d - m - y"); ?>
    </div>
    <div>
        Nomor Surat : <?= $surat_masuk['no_surat']; ?><br>
        Sifat : Surat Dinas<br>
        Lampiran : -<br>
        Perihal : <?= $surat_masuk['perihal']; ?><br>
        <br>
        Kepada <br>
        Yth.
        <?= $surat_masuk['nama_lengkap']; ?><br>
        di Tempat <br>
        <br>
        <div class="p-justify">
            Assalamualaikum wr. wb. <br>
            Ini adalah contoh paragraf yang
            menggunakan font Arial. Semua teks pada paragraf ini akan menggunakan font Arial. Arial adalah salah satu font yang umum digunakan pada Windows aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.
            <br>
            <br>
            Ini adalah contoh paragraf yang
            menggunakan font Arial. Semua teks pada paragraf ini akan menggunakan
            font Arial. Arial adalah salah satu font yang umum digunakan pada
            Windows.
            <br>
            Demikian surat pengantar dinas ini kami sampaikan, terimakasih <br>
            <br>
            <div class="p-kanan">

            </div>

        </div>


    </div>

</body>

</html>