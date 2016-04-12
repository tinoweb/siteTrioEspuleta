<?php
 $past = time() - 100;
 //this makes the time in the past to destroy the cookie
 setcookie('usuario', gone, $past);
 setcookie(987654321, gone, $past);
 header("Location: index.php");
 ?>