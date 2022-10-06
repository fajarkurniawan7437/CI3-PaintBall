<div class="container">
    <h1>Edit Profile</h1>
    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/change_profile'); ?>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $user['first_name']; ?>">
                    <?= form_error('firstname', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $user['last_name']; ?>">
                    <?= form_error('lastname', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date" value="<?= $user['date_birth']; ?>">
                    <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gender" name="gender" value="<?= $user['gender']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="mb-3">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-3 row justify-content-end">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</div>
</form>
</div>
</div>