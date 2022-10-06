<div class="container">
    <div class="row mt-4">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($cart = $this->cart->contents()) {
                    foreach ($cart as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>your total spending : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>

            <h3>Input Shipping Address and Payment</h3>

            <form method="post" action="<?php echo base_url('produk/order') ?>">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" class="form-control" required>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Complete Address</label>
                    <input type="text" id="address" name="address" placeholder="Your Complete Address" class="form-control" required>
                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>No.Telp</label>
                    <input type="text" id="telp" name="telp" placeholder="Your No Telepon" class="form-control" required>
                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Delivery Service</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>JNT</option>
                        <option>Anteraja</option>
                        <option>SiCepat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bank</label>
                    <select class="form-control">
                        <option>BCA - 03XXXX</option>
                        <option>BNI - 02XXXX</option>
                        <option>BRI - 05XXXX</option>
                        <option>DKI - 07XXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Message</button>
            </form>

        <?php
                } else {
                    echo "<h4>Shopping cart is empty";
                }
        ?>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>