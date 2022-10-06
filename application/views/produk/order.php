<div class="continer">
    <div class="alert alert-success">
        <p class="text-center align-middle">Congratulations, your order has been successfully processed !</p>
        <h4>Invoice Product</h4>
        <table class="table table-bordered table table-success table-striped text-center">
            <tr class="table-success">
                <th>No</th>
                <th>Name Produk</th>
                <th>Total</th>
                <th>Price</th>
                <th>Sub-Total</th>
            </tr>

            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr class="text-black">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                    <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="text-black">
                <td colspan="4"></td>
                <td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
            </tr>
        </table>



    </div>
</div>