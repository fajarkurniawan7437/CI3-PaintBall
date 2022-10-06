<div class="container">
    <div class="row mt-3">
            <div class="col-md-6">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
               Delete data Pemesanan Paintball
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama    : <?= $booking['nama_booking']; ?></li>
                <li class="list-group-item">Jumlah  : <?= $booking['jumlah_booking']; ?></li>
                <li class="list-group-item">Tanggal : <?= $booking['tanggal_booking']; ?></li>
                <li class="list-group-item">Jam     : <?= $booking['jam_booking']; ?></li>
                <li class="list-group-item">Paket   : <?= $booking['paket_booking']; ?></li>
            </ul>
        </div>
        <button href="<?= base_url(); ?>booking<?=$booking['id_booking'];?>"  type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?');">Delete</button>
        </div>
    </div>
</div>