<style>
    .container {
        position: relative;
        display: flex;
        padding: 4%;
    }

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
    <form class="col-md-4" method="post" action="<?= base_url(); ?>arrival/insert">
        <input type="hidden" name="id_baju" class="form-control">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" placeholder="Jhon Doe">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Harga Baju</label>
            <input type="number" name="harga_baju" class="form-control" placeholder="0">
        </div>
        <button type="submit" class="btn btn-dark">Tambahkan</button>
    </form>
    <table class="table col-md-8">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Baju</th>
                <th scope="col">Nama Baju</th>
                <th scope="col">Harga Baju</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($arrival as $show) { ?>
                    <th scope="row"><?= $show['id_baju']; ?></th>
                    <td><?= $show['nama_baju'] ?></td>
                    <td><?= $show['harga_baju'] ?></td>
                    <td><a class="btn btn-secondary" data-toggle="collapse" href="<?= base_url(); ?>arrival/updated/<?= $show['id_baju']; ?>" role="button">Update</a></td>
                    <td><a class="btn btn-danger" data-toggle="collapse" href="<?= base_url(); ?>arrival/delete/<?= $show['id_baju']; ?>" role="button">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>