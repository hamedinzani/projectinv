<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                                    <div class="form-row">
                                        <div class="col-md">
                                            <div class="form-group"><label class="small mb-1" for="inputFirstName">Full Name</label>
                                                <input class="form-control py-4" id="name" name="name" type="text" placeholder="Enter full name" value="<?= set_value('name'); ?>" />
                                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="email" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter email address" value="<?= set_value('email'); ?>" />
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="password1" name="password1" type="password" placeholder="Enter password" />
                                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Confirm password" /></div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary btn-block" href="login.html">Create Account</button></div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="<?= base_url('auth'); ?>">Have an account? Go to login</a></div>
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
                <div class="d-flex align-items-center justify-content-between small">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Kodegiri Inventory <?= date('Y'); ?></span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with fire<i class="mdi mdi-fire text-danger"></i>
                    </span>
                </div>
            </div>
    </div>
    </footer>
</div>
</div>