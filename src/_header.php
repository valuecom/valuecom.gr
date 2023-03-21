<?php include_once('_config.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex flex-column">
  <header class="d-flex align-items-center">
    <div class="container-xxl ">
      <div class="row align-items-center">
        <div class="col-2">
          <div class="logo-wrap">
            <a href="https://valuecom.github.io/valuecom.gr/public/index.html">
              <img src="../assets/images/logo.svg" alt="Valuecom">
            </a>
          </div>
        </div>
        <div class="col-10">
          <nav class="navbar navbar-expand-lg justify-content-end">
            <div class="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo $link_base_url; ?>we-are-trusted.php">Clients</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $link_base_url; ?>we-believe.php">Culture</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">The team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>