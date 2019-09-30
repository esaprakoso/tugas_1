<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,250.7C320,256,400,224,480,202.7C560,181,640,171,720,181.3C800,192,880,224,960,213.3C1040,203,1120,149,1200,122.7C1280,96,1360,96,1400,96L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    <div class="box floating-center">
        <div class="box-header">
            <h4>Biodata</h4>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-right text-md-right">
                    Nomor Induk Mahasiswa
                </div>
                <div class="col-lg-6 col-md-6">
                    <b><?= $detail['nim'] ?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-right text-md-right">
                    Nama Lengkap
                </div>
                <div class="col-lg-6 col-md-6">
                    <b><?= $detail['nama_lengkap'] ?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-right text-md-right">
                    Jenis Kelamin
                </div>
                <div class="col-lg-6 col-md-6">
                    <b><?= $detail['jenis_kelamin'] ?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-right text-md-right">
                    Kelas
                </div>
                <div class="col-lg-6 col-md-6">
                    <b><?= $detail['kelas'] ?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-right text-md-right">
                    Matakuliah
                </div>
                <div class="col-lg-6 col-md-6">
                    <b><?= $detail['matakuliah'] ?></b>
                </div>
            </div>
        </div>
    </div>
</body>
</html>