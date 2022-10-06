<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    View Pemesanan Paintball
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $booking['nama_booking']; ?></li>
                    <li class="list-group-item">Jumlah : <?= $booking['jumlah_booking']; ?></li>
                    <li class="list-group-item">Tanggal : <?= $booking['tanggal_booking']; ?></li>
                    <li class="list-group-item">Jam : <?= $booking['jam_booking']; ?></li>
                    <li class="list-group-item">Paket : <?= $booking['paket_booking']; ?></li>
                </ul>
            </div>
            <a href="<?= base_url('user/home'); ?>" class="btn btn-primary text-white">Kembali</a>
        </div>
    </div>
</div>