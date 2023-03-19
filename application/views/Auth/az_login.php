    <!-- Login Section Start -->
    <div id="login">
        <div class="container">
            <div class="section-header">
                <!-- Login Section Start -->
                <div id="login">
                    <div class="container">
                        <div class="section-header">
                            <h2>Login</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                            </p>
                        </div>
    
                        <div class="col-md-12">
                            <?= $this->session->flashdata('message') ?>
                            <div class="login-form">
                                <form  method="post" action="<?= base_url('c_auth') ?>">
                                    <div class="form-row">
                                        <div class="control-group col-sm-6">
                                            <label>Your Email</label>
                                            <input type="email" class="form-control" required="required" name="email" />
                                        </div>
                                        <div class="control-group col-sm-6">
                                            <label>Your Password</label>
                                            <input type="password" class="form-control" required="required" name="password"/>
                                        </div>
                                    </div>
                                    <div class="bn"><button type="submit">Login</button></div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('c_auth/reg') ?>">Create an Account!</a>
                                    </div>

                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Section End -->

            <!-- Footer Section Start -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="social">
                                <a href="">
                                    <li class="fa fa-instagram"></li>
                                </a>
                                <a href="">
                                    <li class="fa fa-twitter"></li>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                            <p>Copyright by aziz ganteng</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section End -->