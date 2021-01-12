<!DOCTYPE html>
<?php
session_start();
error_reporting (0);
ini_set('display_error', '0');
if ($_SESSION['auth']==1) {
    header('Location: home.php');
    exit;
}
if ($_SESSION['auth']==2) {
    header('Location: admin.php');
    exit;
}
if (!$_SESSION['success']) {
        $_SESSION['success']="";
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Ecotime</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
      <div class="container"> <a class="navbar-brand logo" href="index.html"> <img style="max-width:200px; margin-top: -7px;" src="Ecotime.png" alt="Logo Ecotime" width=/> </a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="contact-us.php">Contattaci</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="registrazione.php">Registrati</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="accedi.php">Login</a></li>
              </ul>
          </div>
      </div>
  </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-black">Login</h2>
                    <p>Accedi al tuo profilo</p>
                </div>
                <form method="post" action="server.php">
                  <?php
                    if (!$_SESSION['success']) {
                        echo "<h6 class='text-black'>".$_SESSION['success']." </h6>";
                    }else{
                        echo "<h6 class='text-black'> ".$_SESSION['success']." </h6>";
                        $_SESSION['success']=""; //FAR VISUALIZZARE L'ESITO E ALLA PROSSIMA e INIZIALIZZARE A "" LA VARIABILE DI SESSIONE
                    }
                    ?>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email" required></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" name="password" required></div>
                    <button class="btn btn-primary btn-block" name="login_user" type="submit">Accedi</button>
                    <br />
                    <p class="text-black">
                    Non sei ancora registrato? <a href="registrazione.php" >Registrati</a>
                    </p>
                </form>
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
