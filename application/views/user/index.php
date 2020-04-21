<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1>My Profile</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Mamber Since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->