<?php
//Connects to your Database

include_once '../conexao.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) {
//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
  die('You did not complete all of the required fields');
}
// checks if the username is in use
if (!get_magic_quotes_gpc()) {
  $_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);
//if the name exists it gives an error
if ($check2 != 0) {
  die('Sorry, the username '.$_POST['username'].' is already in use.');
}
// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
  die('Your passwords did not match. ');
}
// here we encrypt the password and add slashes if needed
$_POST['pass'] = md5($_POST['pass']);
if (!get_magic_quotes_gpc()) {
  $_POST['pass'] = addslashes($_POST['pass']);
  $_POST['username'] = addslashes($_POST['username']);
}
// now we insert it into the database
$insert = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
$add_member = mysql_query($insert);
?>

 <h1>Registered</h1>

 <p>Thank you, you have registered - you may now <a href="index.php">login</a>.</p>

 <?php
 }
 else
 {
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add User</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
      body{padding-top:100px;}
  </style>
</head>
<body>
    <!-- add user content -->
      <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Cadastro de usuario</h3>
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

                              <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass2" type="password" value="">
                              </div>

                              <input name="submit" class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                          </fieldset>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
    <!-- end add user content -->
</body>


<?php
 }
 ?>