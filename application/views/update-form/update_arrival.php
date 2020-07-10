<style>
    .container {
        position: relative;
        display: block;
        margin: 5% 23%;
    }
</style>
<div class="container">
    <form class="col-md-8" method="post" action="<?= base_url(); ?>arrival/update_arr">
        <input type="hidden" name="id_baju" class="form-control" value="<?php echo $data_arrival->id_baju; ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" placeholder="Jhon Doe" value="<?php echo $data_arrival->nama_baju; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Harga Baju</label>
            <input type="number" name="harga_baju" class="form-control" placeholder="Jhon Doe" value="<?php echo $data_arrival->harga_baju; ?>">
        </div>
        <button type="submit" class="btn btn-dark">Ubah</button>
    </form>
</div>