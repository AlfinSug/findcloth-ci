<style>
    .container {
        position: relative;
        display: block;
        margin: 5% 23%;
    }
</style>
<div class="container">
    <form class="col-md-8" method="post" action="<?= base_url(); ?>customer/update_customer">
        <input type="hidden" class="form-control" name="id_customer" value="<?php echo $data_cust->id_customer; ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Customer</label>
            <input type="text" class="form-control" name="nama_customer" placeholder="Jhon Doe" value="<?php echo $data_cust->nama_customer; ?>">
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
            <input type="text" class="form-control" placeholder="08976545678" name="no_telp" value="<?php echo $data_cust->no_telp; ?>">
        </div>
        <button type="submit" class="btn btn-dark">Ubah</button>
    </form>
</div>