<!DOCTYPE html>
<html lang="de">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8ddae4d2d.js" crossorigin="anonymous"></script>
    <title>Fabian Clasen</title>

    <?php echo file_get_contents("head.html") ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
    <!-- Header per PHP einfügen -->
    <?php echo file_get_contents("navigation.html"); ?>

    <i class="fa fa-bars" aria-hidden="true"></i>
    <section class="centerText" id="home">
      <div id="generalInfo">
        <h1>FABIAN CLASEN</h1>
        <h2>Stellv. Ortsvorsitzender<br/> JU Schönberg</h2>
      </div>
    </section>

    <!-- Footer per PHP einfügen -->
    <?php echo file_get_contents("footer.html"); ?>

    <!-- JS einbinden -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/mobile-menu.js"></script>
    <script src="js/lazysizes.min.js" async=""></script>
  </body>
</html>
