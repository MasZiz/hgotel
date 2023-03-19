<!-- Tipe Kamar -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <h1 class="mt-4">TAMBAH KAMAR</h1>
                <div class="card mt-12">
                    <h5 class="card-header bg-secondary">Tipe Kamar</h5>
                    
                    <table class="table">
                    <thead>
                        <tr>
                            <th>nama Kamar</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Tanggal Update</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($tipeKamar as $tk) : ?>

                            <tr>


                                <td class="col-md-1"><?= $tk['nama_kamar'] ?></td>
                                <td><?= $tk['fasilitas_kamar'] ?></td>
                                <td><?= $tk['tipe_harga'] ?></td>
                                <td class="col-md-1"><?= $tk['tanggal_update'] ?></td>
                                <td><img src="<?php echo base_url() .'/assets/img/' . $tk['img']; ?>" width="100px"></td>

                                <!-- Edit -->
                                <td>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editkamar<?= $tk['id'] ?> ">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <div class="modal fade" id="editkamar<?= $tk['id'] ?>" tabindex="-1" aria-labelledby="editkamar" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editkamar">Edit Tipe Kamar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit Kamar -->
                                                    <form method="post" action="<?= base_url('adminDakon/fungsi_editKamar/' . $tk['id']) ?>" enctype="multipart/form-data">

                                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

                                                        <div class="mb-3">
                                                            <label for="tipekamar" class="form-label">
                                                                <h6>Tipe Kamar</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['nama_kamar'] ?>" id="tipekamar" name="tipekamar" aria-describedby="tipekamar">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="fasilitas" class="form-label">
                                                                <h6>Fasilitas</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['fasilitas_kamar'] ?>" id="fasilitas" name="fasilitas">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">
                                                                <h6>Harga</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['tipe_harga'] ?>" id="harga" name="harga">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="tanggal" class="form-label">
                                                                <h6>Tanggal</h6>
                                                            </label>
                                                            <input type="date" class="form-control" value="<?= $tk['tanggal_update'] ?>" id="tanggal" name="tanggal">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">
                                                                <h6>Image</h6>
                                                            </label>
                                                            <input type="file" class="form-control" value="<?= $tk['img'] ?>" id="image" name="image">
                                                        </div>






                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="Submit" class="btn btn-warning">Edit Tipe
                                                                Kamar</button>
                                                        </div>

                                                    </form>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>



                                <td>
                                    <a href="<?= base_url('adminDakon/fungsi_deletKamar/' . $tk['id']) ?>">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="fa-solid fa-trash"></i></i></button>
                                    </a>
                                </td>

                            </tr>

                        <?php endforeach ?>

                    </thead>

                </table>

            </div>
            <a href="<?= base_url('adminDakon/form_tambahkamar/') ?>"><button type="button" class="btn btn-primary col-md-2">Tambah Tipe Kamar</button></a>


        </div>
    </main>