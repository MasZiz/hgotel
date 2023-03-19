    <!-- Header Section Start -->
    <header id="header">
        <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
        <div class="phone"><a href="<?= base_url('c_auth/logout'); ?>">Logout</a></div>
        <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
        <nav class="main-menu top-menu">
            <ul>
                <li class="active"><a href="<?= base_url('c_hotel2'); ?>">Home</a></li>
                <li><a href="<?= base_url('c_hotel2/abot'); ?>">About Us</a></li>
                <li><a href="<?= base_url('c_hotel2/apartemen'); ?>">Apartments</a></li>
                <li><a href="<?= base_url('c_hotel2/fasilitas'); ?>">Amenities</a></li>
                <li><a href="<?= base_url('c_hotel2/booking'); ?>">Booking</a></li>
                <li><a href="<?= base_url('c_hotel2/contac'); ?>">Contact Us</a></li>
                <li><a href="" data-toggle="modal" data-target="#">
									<span><?= $user['username'] ?></span>
            </ul>
        </nav>
    </header>
    <!-- Header Section End -->