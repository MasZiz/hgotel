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
                   <li class="active"><a href="<?= base_url('userkojez');?>">Home</a></li>
           </nav>
       </header>
       </body>
       <!-- Header Section End -->    

    <!-- Main -->
    <div class="container ">

        <div class="card">
            <div class="card-body">

                <h3 class="card-subtitle mb-2 text-muted mb-4">Booking Room</h3>
                <form method="post" action="<?= base_url('userkojez/tambahBooking') ?>">
     

                    <fieldset disabled>
                        <div class="row mb-5">
                            <div class="col-md-6">

                                <h6><label for="disabledTextInput" class="form-label">Nama</label></h6>
                                <input type="text" class="form-control mb-3" id="nama" name="nama" value="<?= $get_user['nama'] ?>" aria-describedby="nama" placeholder="Disabled input">

                            </div>

                            <div class="col-md-6">

                                <h6><label for="exampleInputEmail1" class="form-label">Email</label></h6>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $get_user['email'] ?>" aria-describedby="email">

                            </div>
                        </div>
                    </fieldset>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputEmail1" class="form-label">Chek In</label></h6>
                                <input type="date" class="form-control" id="chekin" name="chekin" aria-describedby="chekin">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputPassword1" class="form-label">Chek Out</label></h6>
                                <input type="date" class="form-control" id="chekout" name="chekout">
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6><label for="exampleInputPassword1" class="form-label">Tipe Kamar</label></h6>
                            <select type="text" name='tipe_kamar' class="form-select" id="tipe_kamar">
                                <option selected>--Pilih Tipe Kamar--</option>
                                <?php foreach ($tipeKamar as $tk) : ?>
                                    <option value="<?= $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>

        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>