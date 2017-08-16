
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="Trang quản lý cho website">
    <meta name="author" content="BachNX">

    <title>Học Ielts theo mục tiêu - Management</title>

    <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/login.css">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="<?php echo base_url();?>login/check" method = "post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <script type="text/javascript" src="<?php echo asset_url()?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo asset_url()?>js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
  </body>
</html>

