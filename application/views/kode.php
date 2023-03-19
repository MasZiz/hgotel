<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="<?= base_url();?>img/lopek.png" rel="icon">
        <link href="<?= base_url();?>img/apple-favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Vendor CSS File -->
        <link href="<?= base_url('assets');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url('assets');?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url('assets');?>/vendor/slick/slick.css" rel="stylesheet">
        <link href="<?= base_url('assets');?>/vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="<?= base_url('assets');?>/vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->   
        <link href="<?= base_url('assets');?>/css/hover-style.css" rel="stylesheet">
        <link href="<?= base_url('assets');?>/css/stel.css" rel="stylesheet">
    </head>

<body>

<body class="">

    <div class="container mt-5">
        <div class="card">
            <div class=" card-header">
                <button type="button" class="btn btn-primary"><i class="fa-solid fa-download"></i> Download PDF
                </button>
            </div>
            <div class="logo-kode">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
            </div>

            <h2 style="text-align:center; " class="mt-3 mb-3 btn-primary ">GEMIRLAP HOTEL</h2>
            <div class="container">

                <table class="table">


                    <tr>
                        <td>
                            <h1>Nama</h1>
                        </td>
                        <td>
                            <h1>: <?= $detailbook['nama'] ?></h1>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h6>Tipe Kamar</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tipe_kamar'] ?></h6>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            <h6>Kode Booking</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['kode_booking'] ?></h6>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h6>Check in</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tanggal_mulai'] ?></h6>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h6>Check out</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tanggal_selesai'] ?></h6>
                        </td>
                    </tr>

                </table>


            </div>
        </div>
    </div>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>













</html>