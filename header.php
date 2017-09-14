<?php define('TEMPLATE_URI','.');?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/elements-style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js'></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-extend">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
              <span class="sr-only">Меню</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav nav-justified">
              <li class="active"><a href="#">Главная</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="head">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="logobox">
                <a href="#" class="logo"><img src="<?php echo TEMPLATE_URI; ?>/img/logo.png" alt=""></a>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="blockphone">
                <div class="phone">8-800-000-00-00</div>
                <a href="#" class="ordercall" data-toggle="modal" data-target="#orderCall">Заказать звонок</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
