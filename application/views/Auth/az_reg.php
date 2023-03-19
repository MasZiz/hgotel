  <!-- Login Section Start -->
  <div id="login">
      <div class="container">
          <div class="section-header">
              <h2>Registration</h2>
              <p>
                  rendy
              </p>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="login-form">
                      <form method="post" action="<?= base_url('c_auth/reg'); ?>">
                          <div class="form-row">
                              <div class="control-group col-sm-6">
                                  <label>Username</label>
                                  <input type="text" class="form-control" id="username" name="username" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Name</label>
                                  <input type="text" class="form-control" required="required" id="nama" name="nama" />
                                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Email Address</label>
                                  <input type="email" class="form-control" required="required" id="email" name="email" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>telepon</label>
                                  <input type="number" class="form-control" required="required" id="telepon" name="telepon" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Tempat lahir</label>
                                  <input type="text" class="form-control" required="required" id="tempat_lahir" name="tempat_lahir" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Tanggal Lahir</label>
                                  <input type="date" class="form-control" required="required" id="tanggal_lahir" name="tanggal_lahir" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Alamat</label>
                                  <input type="text" class="form-control" required="required" id="alamat" name="alamat" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Gender</label>
                                  <select class="custom-select" id="gender" name="gender">
                                      <option selected>--Pilih Jenis Kelamin Anda--</option>
                                      <option value="L">Laki Laki</option>
                                      <option value="P">Perempuan</option>
                                  </select>
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Status</label>
                                  <input type="text" class="form-control" required="required" id="status" name="status" />
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="control-group col-sm-6">
                                  <label>Your Password</label>
                                  <input type="password" class="form-control" required="required" id="password1" name="password1" />
                              </div>
                              <div class="control-group col-sm-6">
                                  <label>Confrim Your Password</label>
                                  <input type="password" class="form-control" required="required" id="password2" name="password2" />
                              </div>
                          </div>
                          <center>
                              <div class="button"><button type="submit">Registration</button></div>
                              <div class="text-center">
                                  <a class="small" href="<?php echo base_url('c_auth') ?>">login</a>
                          </center>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>