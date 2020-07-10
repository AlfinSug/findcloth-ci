<style>
    .container {
        position: relative;
        display: flex;
        padding: 4%;
    }

    form {}

    .table {
        text-align: center;
        display: block;
        margin: 3% 5%;
        width: 90%;
    }
</style>

<?php
$sukses = $this->session->flashdata('sukses');

if (!empty($sukses)) {
    echo $sukses;
}
?>
<div class="container">
    <form class="col-md-4" method="post" action="<?= base_url(); ?>sales/insert">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Customer</label>
            <select class="custom-select" name="id_customer">
                <option value="0">- Pilih Nama Customer -</option>
                <?php foreach ($customer as $row) { ?>
                    <option value="<?= $row['id_customer']; ?>"><?= $row['nama_customer']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Model Baju</label>
            <select multiple class="form-control" name="id_baju">
                <?php foreach ($arrival as $row) { ?>
                    <option value="<?= $row['id_baju']; ?>"><?= $row['nama_baju']; ?> - Rp <?= $row['harga_baju']; ?>,-</option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Total Pembelian</label>
            <input type="text" class="form-control" name="total_pembelian" placeholder="0">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Pembelian</label>
            <input type="date" class="form-control" name="tgl_penj" placeholder="01-01-2020">
        </div>
        <button type="submit" class="btn btn-dark">Order</button>
    </form>
    <table class="table col-md-8">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Penjualan</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Merk Baju & Harga</th>
                <th scope="col">Total Pembelian</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $row) { ?>
                <tr>
                    <th scope="row"><?= $row['id_sales']; ?></th>
                    <td><?= $row['nama_customer']; ?></td>
                    <td><?= $row['nama_baju']; ?> - Rp <?= $row['harga_baju']; ?>,-</td>
                    <td><?= $row['total_pembelian']; ?></td>
                    <td><?= $row['tgl_penj']; ?></td>
                    <td><a class="btn btn-secondary" data-toggle="collapse" href="<?= base_url(); ?>sales/updated/<?= $row['id_sales']; ?>" role="button">Update</a></td>
                    <td><a class="btn btn-danger" data-toggle="collapse" href="<?= base_url(); ?>sales/delete/<?= $row['id_sales']; ?>" role="button">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>