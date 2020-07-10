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

    <title><?= $judul; ?></title>
</head>

<body>

    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url(); ?>home">Findcloth.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>sales">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>arrival">Arrival</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>customer">Customer</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?= base_url(); ?>login/logout" class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Logout</a>
            </form>
        </div>
    </nav>