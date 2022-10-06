<div class="container">
    <div class="row mt-2 text-center">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <h5>
                        <span class="badge bg-warning">
                            <?php $cart = 'Shopping Cart: ' . $this->cart->total_items() . ' items' ?>
                            <?php echo anchor('produk/detail_cart', $cart) ?>
                        </span>
                    </h5>
                </li>
            </ul>
        </div>
        <?php foreach ($produk as $pdk) : ?>

            <div class="card ml-3 mt-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/assets/produk/' . $pdk->gambar_produk ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1 text-black"><?php echo $pdk->nama_produk ?></h5>
                    <small><?php echo $pdk->ket_produk ?></small><br>
                    <span class="badge bg-success mb-3">Rp. <?php echo number_format($pdk->harga_produk, 0, ',', '.') ?></span><br>
                    <?php echo anchor('produk/add_cart/' . $pdk->id_produk, '<div class="btn btn-sm btn-primary">Add Cart</div>') ?>
                    <?php echo anchor('produk/detail/' . $pdk->id_produk, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
        <div class="row mt-3">
            <div class="col">
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</div>