<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark navbar-fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img-site/logo.png" alt="logo" style="width:55px; height: 55px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Espace Formulaire</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.msg.php">Renseignez le formulaire</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="img-site/market.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Inscription</h5>
                <p class="card-text">Chers commerciaux terrains, veuillez nous faire parvenir vos travaux.</p>
                <a href="login.msg.php" class="btn btn-success">Renseignez le formulaire</a>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="img-site/infor.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">IPAM, université d'enseignement supérieur</h5>
                <p class="card-text">IPAM est un Institut Polyvalent des Affaires et du Management.</p>
                <a href="https://www.ipam.ci" class="btn btn-success">IPAM</a>
            </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card" style="width: 18rem;" >
            <img src="img-site/mana.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Qui sommes-nous?</h5>
                <p class="card-text">Sis à Abidjan-Cocody, 2 Plateaux 7ème Tranche, l'INSTITUT POLYVALENT DES AFFAIRES ET DU MANAGEMENT en abrégé I.P.A.M, a été créé en 2022.</p>
            </div>
            </div>
        </div>  
         
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>