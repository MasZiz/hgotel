<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>
                    <a class="nav-link" href="<?= base_url('adminDakon/tambah_kamar') ?>">
                        <div class="sb-nav-link-icon"><i class='fas fa-bed' style='color: blue'></i></div>
                        Tambah Kamar 
                    </a>

                
                    <div class="sb-sidenav-menu-heading">Interface</div>
                  

                    <!-- Room -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-person-booth"></i></div>
                       Room
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        
                        
                    </a>
                    
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <?php foreach($tipeKamar as $tk) : ?>
                            <a class="nav-link" href="<?= base_url('adminDakon/room/') . $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></a>
                            <?php endforeach ?>
                        </nav>
                    </div>

                    <?php if($user_pengguna['level']==1){?>
                    <!-- Master Data  -->   
                    <a class="nav-link" href="<?= base_url('adminDakon/masterData') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-gear" style='color: blue'>></i></div>
                        Master Data
                    </a>
                    <?php } ?>

                    <!-- Booking -->
                    <a class="nav-link" href="<?= base_url('adminDakon/detailBook') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style='color: blue'>></i></div>
                        Booking
                    </a>



                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">



                        </nav>
                    </div>  
                        
                    </div>
                </div>
                
        </nav>
    </div>