<html>
<?php
session_start();
error_reporting (0);
ini_set('display_error', '0');
if ($_SESSION['auth']==0) {
    header('Location: index.html');
    exit;
}
if ($_SESSION['auth']==1) {
    header('Location: home.php');
    exit;
}
if (!$_SESSION['success']) {
        $_SESSION['success']=0;
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ecotime</title>
    <script>!function(e,i,n,s){
      var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];
      if(window[t]&&window[t].initialized)
        window[t].process&&window[t].process();
      else if(!e.getElementById(n)){
        var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}
      }(document,0,"infogram-async");
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <style type="text/css">
    body{
      overflow-x:hidden;
    }
    a {
      color:black;
    }
    header {
      position:relative;
      background-color: black;
      height: 85vh;
      min-height: 25rem;
      width: 100%;
      overflow:hidden;
    }
    header .homepage{
      position:relative;
      background-color: white;
      height: 85vh;
      min-height: 25rem;
      width: 100%;
      overflow:hidden;
    }
    header .overlay-2 {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: black;
      opacity: 0.10;
      z-index: 1;
    }
    header .overlay-1 {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: black;
      opacity: 0.75;
      z-index: 1;
    }
    header video {
      position:absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: 0;
      -ms-transform: translateX(-50%) translateY(-50%);
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
    }
    header .container {
      position:relative;
      z-index: 2;
    }
    @media (pointer: coarse) and (hover: none) {
      header {
        background: url('forest-green.jpg') black no-repeat center center scroll;
      }
      header video {
        display: none;
      }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"> <a class="navbar-brand logo" href="home.php"> <img style="max-width:200px; margin-top: -7px;" src="Ecotime.png" alt="Logo Ecotime" width=/> </a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item dropdown text-black">
                  <a class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo "<h6 class='text-black'>Ciao ".$_SESSION['nome']." &nbsp <i class='icon-user icon'></i> </h6>"; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin.php">Gestione Database</a>
                    <form method="post" action="server.php"> <button class="dropdown-item" role="button" type="submit" name="logout_user">Logout</button> </form>
                  </div>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-black">Admin Panel</h2>
                </div>
               <div class="row">
               <div class="col-md-6 col-lg-4">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="card-title">Rifiuti più cercati</h5>
                     <p class="card-text">Puoi vedere quali sono i rifiuti più cercati dagli utenti (>5 ricerche).</p>
                     <a href="view_rifiuti.php" class="btn btn-primary">Vedi</a>
                   </form>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-lg-4">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="card-title">Materiali più cercati</h5>
                     <p class="card-text">Puoi vedere quali sono i materiali più riciclati (>5 ricerche).</p>
                     <a href="view_materiali.php" class="btn btn-primary">Vedi</a>
                   </form>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-lg-4">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="card-title">Ricerche utenti</h5>
                     <p class="card-text">Puoi vedere le ricerche effettuate dagli utenti.</p>
                     <a href="view_ricercheutenti.php" class="btn btn-primary">Vedi</a>
                   </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="footer-copyright">
            <p>© 2020 Ecotime</p>
      </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
