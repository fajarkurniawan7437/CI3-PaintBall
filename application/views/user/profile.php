<div class="container">
    <h1>My Profile</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['first_name']; ?> <?= $user['last_name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">date of birth <?= date($user['date_birth']); ?></small></p>
                    <p class="card-text"><?= $user['gender']; ?></p>
                    <p class="card-text"><small class="text-muted">member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>