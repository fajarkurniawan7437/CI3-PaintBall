<div class="container">
    <div class="row justify-content-center">
        <?= $this->session->flashdata('message'); ?>
        <?php if ($this->session->flashdata('add')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pemesanan booking PaintBall<strong> berhasil </strong><?= $this->session->flashdata('add'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url() ?>user/add" class="btn btn-primary text-white">Tambah Pemesanan PaintBall</a>
                <a href="<?= base_url('login/logout') ?>" class="btn btn-danger text-white">logout</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card text-center text-black">
                    <h2 class="card-header bg-success fst-italic">Pemesanan PaintBall</h2>
                </div>
                <table class="table table-bordered border-success">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($booking as $no => $bkg) : ?>
                            <tr class="table-light">
                                <td><?= $no + 1 ?></td>
                                <td><?= $bkg['nama_booking'] ?></td>
                                <td><?= $bkg['tanggal_booking'] ?></td>
                                <td><a href="<?= base_url(); ?>user/view/<?= $bkg['id_booking']; ?>" class="badge rounded-pill bg-info">View</a>
                                    <a href="<?= base_url(); ?>user/edit/<?= $bkg['id_booking']; ?>" class="badge rounded-pill bg-primary text-white">Edit</a>
                                    <a href="<?= base_url(); ?>user/delete/<?= $bkg['id_booking']; ?>" class="badge rounded-pill bg-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>