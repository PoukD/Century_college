<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/assets/admin/css/style.css">
    <title>Admin Site</title>
  </head>
  <body>
  
    <div id="header">
      <div class="container-fluid">
          <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
          <a href="index.php?" class="btn btn-primary" style="margin-right:20px"><i class="bi bi-arrow-bar-left"></i>Back To Website &nbsp</a>
          <a href="index.php?controller=admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4">Administration</span>
          </a>
          

          <ul class="nav nav-pills">
              <?php if(isset($_SESSION['user'])) { ?>
                <li class="nav-item"><a href="index.php?controller=admin" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="index.php?controller=user" class="nav-link">Users</a></li>
                <li class="nav-item"><a href="index.php?controller=post" class="nav-link">Post</a></li>
                <li class="nav-item"><a href="index.php?controller=category" class="nav-link">Category</a></li>
                <li class="nav-item"><a href="index.php?controller=admin&action=logout" class="nav-link">Logout</a></li>
              <?php } else { 
              }
              ?>
          </ul>
          </header>
      </div>
    </div>