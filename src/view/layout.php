<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.typekit.net/vaq1qaw.css">
  <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
  <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
  <link rel="shortcut icon" href="./assets/img/favicon-32x32.png" type="image/png">
  <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
  <?php echo $css; ?>
  <title>Slanted: Clarendon</title>
</head>
<body>
  <div class="container">
    <?php echo $content;?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <script> Splitting(); </script>
  <?php echo $js; ?>
</body>
</html>
