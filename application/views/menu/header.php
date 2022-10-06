<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
  <title><?php echo $judul ?></title>
</head>
<style>
  .navbar-nav a:hover {
    color: #F5FFFA !important;
    background-color: #6B8E23;
  }

  body {
    background-image: url(assets/produk/paintball.jpg);
    background-size: cover;
    padding-bottom: 60px;
  }

  footer {
    width: 100%;
    height: 50px;
    line-height: 20px;
    position: absolute;
    bottom: -10px;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-lg" style="background-color:	#9ACD32">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('home'); ?>">
        <img src="" alt="" style="width:50px;">PaintBall</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="<?= base_url(); ?>produk">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="<?= base_url(); ?>user/home">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="<?= base_url('login'); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </nav>