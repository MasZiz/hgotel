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

    <!-- Header Section Start -->
<body>
  <header id="header">
           <a href="<?= base_url('c_hotel');?>" class="logo"><img src="<?= base_url();?>img/logo/logo.png" alt="logo"></a>
           <nav class="main-menu top-menu">
               <ul>
                   <li class="active"><a href="<?= base_url('c_hotel');?>">Home</a></li>
                   <li><a href="<?= base_url('c_auth/reg');?>">log out</a></li>
               </ul>
           </nav>
       </header>
       </body>
       <!-- Header Section End -->  
       
    <div class="container">
        <div class="row">
            <?php foreach ($tipeKamar as $tk) :  ?>
            <div class="col s6">
                <div class="card">

                    <div class="card-image">
                        <img src="<?= base_url('assets/img/' . $tk['img']) ?>">
                        <span class="card-title"><?= $tk['nama_kamar'] ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $tk['fasilitas_kamar'] ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?= base_url('userkojez/booking') ?>">
                            <button class="waves-effect waves-light btn">Rp<?= $tk['tipe_harga'] ?></button>
                        </a>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </div>
    </div>


</body>

</html>


        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href=""><li class="fa fa-instagram"></li></a>
                            <a href=""><li class="fa fa-twitter"></li></a>
                            <a href=""><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>Copyright &#169; <a href="https://htmlcodex.com">HTML Codex</a> All Rights Reserved.</p>
						<p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
    
















    