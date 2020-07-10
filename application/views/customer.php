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
    <form class="col-md-4" method="post" action="<?= base_url(); ?>customer/insert">

        <input type="hidden" class="form-control" name="id_customer">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Customer</label>
            <input type="text" class="form-control" name="nama_customer" placeholder="Jhon Doe">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jenis Kelamin</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="jenis_kelamin" class="custom-control-input" value="L">
                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="jenis_kelamin" class="custom-control-input" value="P">
                <label class="custom-control-label" for="customRadio2">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Telpon</label>
            <input type="text" class="form-control" placeholder="08976545678" name="no_telp">
        </div>
        <button type="submit" class="btn btn-dark">Tambahkan</button>
    </form>
    <table class="table col-md-8">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Customer</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">No. Telpon</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customer as $show) { ?>
                <tr>
                    <th scope="row"><?php echo $show['id_customer']; ?></th>
                    <td><?php echo $show['nama_customer']; ?></td>
                    <td><?php echo $show['no_telp']; ?></td>
                    <td><?php echo $show['jenis_kelamin']; ?></td>
                    <td><a class="btn btn-secondary" data-toggle="collapse" href="<?= base_url(); ?>customer/updated/<?= $show['id_customer']; ?>" role="button">Update</a></td>
                    <td><a class="btn btn-danger" data-toggle="collapse" href="<?= base_url(); ?>customer/delete/<?= $show['id_customer']; ?>" role="button">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>