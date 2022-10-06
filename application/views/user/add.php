<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="row mt">
                    <div class="p-5">
                        <div class="text-center ">
                            Form Booking PaintBall
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Booking">
                                    <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah Booking">
                                    <div class="form-text text-danger"><?= form_error('jumlah'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                    <div class="form-text text-danger"><?= form_error('date'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="time">Jam</label>
                                    <input type="time" name="time" id="time" class="form-control">
                                    <div class="form-text text-danger"><?= form_error('time'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="paket">Paket</label>
                                    <select class="form-select" name="paket" aria-label="Default select example">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                </div>
                                <div class="row mt-4">
                                    <button type="submit" name="add" class="btn btn-primary">Tambah Booking</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>