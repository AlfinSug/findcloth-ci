<style>
    .container {
        position: relative;
        display: block;
        margin: 5% 23%;
    }
</style>
<div class="container">
    <form class="col-md-8" method="post" action="<?= base_url(); ?>sales/update_sale">
        <input type="hidden" class="form-control" name="id_sales" placeholder="0" value="<?php echo $data_sale->id_sales; ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Customer</label>
            <select class="custom-select" name="id_customer">
                <?php foreach ($customer as $show) { ?>
                    <option value="<?= $show['id_customer']; ?>" selected><?= $show['nama_customer']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Model Baju</label>
            <select multiple class="form-control" name="id_baju">
                <?php foreach ($arrival as $row) { ?>
                    <option value="<?= $row['id_baju']; ?>" if()><?= $row['nama_baju']; ?> - Rp <?= $row['harga_baju']; ?>,-</option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Total Pembelian</label>
            <input type="text" class="form-control" name="total_pembelian" placeholder="0" value="<?php echo $data_sale->total_pembelian; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Pembelian</label>
            <input type="date" class="form-control" name="tgl_penj" value="<?php echo $data_sale->tgl_penj; ?>">
        </div>
        <button type="submit" class="btn btn-dark">Ubah esanan</button>
    </form>
</div>