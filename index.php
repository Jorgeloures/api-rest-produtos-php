<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  </head>
  <body>

  <?php
    require 'api/autoload.php';
    define('BASE_URL', 'http://localhost/API-REST-PRODUTOS-PHP');
    
    use api\core\App;
    use api\core\Controller;

    $app = new App();

  ?>
  <script src="/assets/js/jquery.slim.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
