<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>Order name</th>
        <th>Delivery address</th>
        <th>Order date</th>
        <th>Pay limit</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tanggal_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td>
                <div class="btn btn-sm btn-primary">Detail</div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

$process = $this->model_invoice->index();
if ($process) {
} else {
echo "Sorry, your order failed to process !";
}