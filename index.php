<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Criée LOGIN | Poulgoazec</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
  </head>
  <body>
    <div class="container">
    <center><h1 style="font-size: 55px; !important">La Criée <small>Poulgoazec</small></h1>
      <div class="jumbotron jumbotron-opacity jumbotron-shadow diff-hauteur" style="width: 35%;">
        <div class="container">
          <form style="" role="form" accept-charset="UTF-8" action="criee.php" method="POST">
            <fieldset>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </span>
                <input class="form-control" placeholder="Login" name="login" type="text" required="" autofocus="">
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock">
                  </i>
                </span>
                <input class="form-control" placeholder="Password" name="pwd" type="password" value="" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Connexion
                </button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </center>
    </div>
  </body>
</html>
