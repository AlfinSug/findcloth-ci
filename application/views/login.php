<style>
    .content {
        padding: 5% 25%;

    }

    h4 {
        text-align: center;
    }
</style>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login Admin</title>
</head>

<body>

    <?php
    $session_failed = $this->session->flashdata('session_failed');
    $logout_success = $this->session->flashdata('logout_success');
    $info = $this->session->flashdata('info');

    if (!empty($session_failed)) {
        echo $session_failed;
    } elseif (!empty($logout_success)) {
        echo $logout_success;
    } elseif (!empty($info)) {
        echo $info;
    }
    ?>

    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <h2>Findcloth.</h2>
        </a>
    </nav>

    <div class="content">
        <h4 class="mb-5">Selamat Datang Kasir</h4>
        <form method="post" action="<?= base_url(); ?>login/login_admin">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kasir</label>
                <input type="text" name="nama_kasir" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password (No. Telpon)</label>
                <input type="password" name="no_telp" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary col-md-4 btn-dark" style="display: block; margin: 5% auto;">Sign In</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>