<div class="container">
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">

                <?php foreach ($produk as $pdk) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url() . '/assets/produk/' . $pdk->gambar_produk ?>" class="card-img-top">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-success">
                                <tr>
                                    <td>Product Name</td>
                                    <td><strong><?php echo $pdk->nama_produk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description</td>
                                    <td><strong><?php echo $pdk->ket_produk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Category</td>
                                    <td><strong><?php echo $pdk->kat_produk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Stock</td>
                                    <td><strong><?php echo $pdk->stock_produk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Price</td>
                                    <td><strong>
                                            <div class="btn btn-sm btn-success">Rp. <?php echo number_format($pdk->harga_produk, 0, ',', '.') ?></div>
                                        </strong></td>
                                </tr>
                            </table>
                            <?php echo anchor('produk/add_cart/' . $pdk->id_produk, '<div class="btn btn-sm btn-primary">Add Cart</div>') ?>
                            <?php echo anchor('produk/', '<div class="btn btn-sm btn-danger">Back</div>') ?>
                        </div>
                    </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>