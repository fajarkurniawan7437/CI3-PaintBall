<div class="container">
    <div class="row justify-content-center">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto col-lg-7">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="<?= base_url('registration'); ?>" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="pl-3" for="nama">First Name</label>
                                        <input type="text" class="form-control form-control-user" id="firstname" name="firstname" placeholder="First Name" value="<?= set_value('firstname'); ?>">
                                        <?= form_error('firstname', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="pl-3" for="nama">Last Name</label>
                                        <input type="text" class="form-control form-control-user" id="lastname" name="lastname" placeholder="Last Name" value="<?= set_value('firstname'); ?>">
                                        <?= form_error('lastname', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pl-3" for="jumlah">Email</label>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="pl-3" for="jumlah">Password</label>
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="pl-3" for="jumlah">Repeat Password</label>
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pl-3" for="jumlah">date of birth</label>
                                    <input type="date" class="form-control form-control-user" id="date" name="date" placeholder="Email Address" value="<?= set_value('date'); ?>">
                                    <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="pl-3" for="jumlah">Gender</label>
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="Male"> Male</input>
                                        <input type="radio" name="gender" id="gender" value="Female"> Female</input>
                                    </div>
                                    <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="pl-3">Picture</label>
                                    <input class="form-control-user" type="file" id="image" name="image">
                                </div>
                                <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>