<?php
//Connects to your Database
$conect = mysqli_connect("127.0.0.1","root","", "trioespuleta") or die(mysql_error());

//Checks if there is a login cookie
if(isset($_COOKIE['usuario'])){ //if there is, it logs you in and directes you to the members page
  $username = $_COOKIE['usuario'];
  $pass = $_COOKIE['987654321'];

  $check = mysqli_query($conect, "SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
  while($info = mysqli_fetch_array( $check )){
    if ($pass != $info['password']){}
      else{
        header("Location: login.php");
      }
    }

 }


 if (isset($_POST['submit'])) {

  if(!$_POST['username']){
    die('É necessario o Username.');
  }

  if(!$_POST['pass']){
    die('É necessario Password.');
  }

  if (!get_magic_quotes_gpc()){
    $_POST['email'] = addslashes($_POST['email']);
  }

  $check = mysqli_query($conect, "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

  $check2 = mysqli_num_rows($check);
    if ($check2 == 0){
     die('Esse usuario não existe no Banco.<br /><br />If you think this is wrong <a href="index.php">try again</a>.');
    }

while($info = mysqli_fetch_array( $check )){

  $_POST['pass'] = stripslashes($_POST['pass']);
  $info['password'] = stripslashes($info['password']);
  $_POST['pass'] = md5($_POST['pass']);
  //gives error if the password is wrong
  if ($_POST['pass'] != $info['password']){
    die('Incorrect password, please <a href="index.php">try again</a>.');
  }

  else{ // if login is ok then we add a cookie
    $_POST['username'] = stripslashes($_POST['username']);
    $hour = time() + 3600;
    setcookie('usuario', $_POST['username'], $hour);
    setcookie(987654321, $_POST['pass'], $hour);

    //then redirect them to the members area
    header("Location: members.php");
  }
}
}
else{
// if they are not logged in
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>core</title>
   <link rel="icon" type="image/png" href="system.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
      body{padding-top:100px;}
  </style>
</head>
<body>

      <!-- login -->
          <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Acesso ao Sistema - Trioespuleta</h3>
                </div>
                  <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                          <fieldset>
                              <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="username" type="text">
                              </div>

                              <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                              </div>

                              <input name="submit" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                          </fieldset>
                      </form>
                  </div>

              </div>
              <div align="center">Voltar ao site <a href="../index.php">click aki...</a></div>
                
            </div>
          </div>
        </div>
      <!-- end login -->

      <script src="../js/jquery-1.11.1.min.js"></script>

      <script src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php
 }
 ?>
