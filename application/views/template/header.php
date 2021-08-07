<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D0D1E1;">
  <div class="container">
    <a class="navbar-brand" href="#">Cemara Group</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?= base_url();?>home">Home</a>
        <a class="nav-link" href="<?= base_url();?>profile">Profile</a>
        <a class="nav-link" href="<?= base_url();?>pendidikan">Pendidikan</a>
        <a class="nav-link" href="<?= base_url();?>pekerjaan">Pekerjaan</a>
        <a class="nav-link" href="<?= base_url();?>kontak">Kontak</a>
        <a class="nav-link" href="<?= base_url();?>about">About</a>
      </div>
    </div>
  </div>
</nav>