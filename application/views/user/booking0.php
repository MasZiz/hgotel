<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <body class="sb-nav-fixed">
                <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand ps-3" href="index.html">Gemilang Hotel</a>
                    <!-- Sidebar Toggle-->
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                            class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href="<?= base_url('c_auth/reg') ?>">register</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href=<?= base_url('c_auth') ?>>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-xxl py-5">
                                <div class="container">
                                    <div class="container-xxl py-5">
                                        <div class="container">
                                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                                <h6 class="section-title text-center text-primary text-uppercase">Room
                                                    Booking</h6>
                                                <h1 class="mb-5">Book A <span
                                                        class="text-primary text-uppercase">Room</span></h1>
                                            </div>
                                            <div class="row g-5">
                                                <div class="col-lg-6">
                                                    <div class="row g-3">
                                                        <div class="col-6 text-end">
                                                            <img class="img-fluid rounded w-75 wow zoomIn"
                                                                data-wow-delay="0.1s"
                                                                src="<?= base_url('assets/img/hotel1.jpg'); ?>"
                                                                style="margin-top: 25%;">
                                                        </div>
                                                        <div class="col-6 text-start">
                                                            <img class="img-fluid rounded w-100 wow zoomIn"
                                                                data-wow-delay="0.3s"
                                                                src="<?= base_url('assets/img/hotel1.jpg    '); ?>">
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <img class="img-fluid rounded w-50 wow zoomIn"
                                                                data-wow-delay="0.5s"
                                                                src="<?= base_url('assets/img/hotel1.jpg'); ?>">
                                                        </div>
                                                        <div class="col-6 text-start">
                                                            <img class="img-fluid rounded w-75 wow zoomI    n"
                                                                data-wow-delay="0.7s"
                                                                src="<?= base_url('assets/img/hotel1.jpg'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                                                        <form action="<?= base_url('user/proses_booking') ?>"
                                                            method="post">
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="username" name="username"
                                                                            placeholder="username">
                                                                        <label for="username">Username</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating date" id="check-in">
                                                                        <input type="date"
                                                                            class="form-control datetimepicker-input"
                                                                            id="check-in" name="check_in"
                                                                            placeholder="check-in" />
                                                                        <label for="check-in">check-in</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating date" id="check-out">
                                                                        <input type="date"
                                                                            class="form-control datetimepicker-input"
                                                                            name="check_out" id="check-out"
                                                                            placeholder="check-out" />
                                                                        <label for="check-out">check-out</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="select1">
                                                                            <option value="1">Adult 1</option>
                                                                            <option value="2">Adult 2</option>
                                                                            <option value="3">Adult 3</option>
                                                                        </select>
                                                                        <label for="select1">Select Adult</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="select2">
                                                                            <option value="1">Child 1</option>
                                                                            <option value="2">Child 2</option>
                                                                            <option value="3">Child 3</option>
                                                                        </select>
                                                                        <label for="select2">Select Child</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" name="tipe_kamar"
                                                                            id="select3">
                                                                            <option value="1">Single Room</option>
                                                                            <option value="2">Standart Room</option>
                                                                            <option value="3">Deluxe Room</option>
                                                                            <option value="4">Double-Double Room
                                                                            </option>
                                                                        </select>
                                                                        <label for="select3">Select A Room</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary">Book
                                                                        Now</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </body>

</html>