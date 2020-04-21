<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login Page</h3>
                            </div>

                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter email address" value="<?= set_value('email'); ?>" />
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><button class="btn btn-primary" href="index.html">Login</button></div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="<?= base_url('auth/registration'); ?>">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">

                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Kodegiri Inventory <?= date('Y'); ?></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with fire <i class="mdi mdi-fire text-danger"></i>
                </span>

            </div>
    </div>
    </footer>
</div>
</div>