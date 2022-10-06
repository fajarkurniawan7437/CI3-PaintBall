<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="row mt-3">
                    <div class="p-5">
                        <div class="text-center ">
                            Form Edit Booking PaintBall
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id_booking" value="<?= $booking['id_booking']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $booking['nama_booking']; ?>">
                                    <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $booking['jumlah_booking']; ?>">
                                    <div class="form-text text-danger"><?= form_error('jumlah'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="date" name="date" id="date" class="form-control" value="<?= $booking['tanggal_booking']; ?>">
                                    <div class="form-text text-danger"><?= form_error('date'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="time">Jam</label>
                                    <input type="time" name="time" id="time" class="form-control" value="<?= $booking['jam_booking']; ?>">
                                    <div class="form-text text-danger"><?= form_error('time'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="paket">Paket</label>
                                    <select class="form-select" name="paket" aria-label="Default select example">
                                        <?php foreach ($paket as $pkt) : ?>
                                            <?php if ($pkt == $booking['paket_booking']) : ?>
                                                <option value="<?= $pkt; ?>" selected><?= $pkt; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $pkt; ?>"><?= $pkt; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row mt-4">
                                    <button type="submit" name="edit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin mengubah data ini ?');">Edit Booking</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>