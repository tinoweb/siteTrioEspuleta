<?php
  
  error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
  $conect = mysql_connect("localhost", "root", "");
  if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
  $db = mysql_select_db("trioespuleta");


