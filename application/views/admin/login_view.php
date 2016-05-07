<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $page_info['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        <form class="form-signin" method="post" action="<?= base_url(); ?>index.php/login">
        <h2 class="form-signin-heading">Авторизация</h2>
        <?php if (!empty($error)): ?>
        <div class="alert alert-dismissible alert-danger"><?= $error; ?></div>
        <?php endif; ?>
        <label for="inputEmail" class="sr-only">Email адрес</label>
        <input type="email" name="email"  class="form-control" placeholder="Email адрес" required autofocus id="inputEmail">
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" name="pswd"  class="form-control" placeholder="Пароль" required id="inputPassword">
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Войти" name="enter">
      </form>

    </div> <!-- /container -->

  </body>
</html>