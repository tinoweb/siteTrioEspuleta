<?php

  include_once  "../conexao.php";

 //checks cookies to make sure they are logged in
 if(isset($_COOKIE['usuario'])){
  $username = $_COOKIE['usuario'];
  $pass = $_COOKIE['987654321'];
  $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
  while($info = mysql_fetch_array( $check )){
    //if the cookie has the wrong password, they are taken to the login page
    if ($pass != $info['password']){
      header("Location: index.php");
    }
    //otherwise they are shown the admin area
    else{

    ?>
<!--
     echo "Admin Area <p>".$username;
     echo "Your Content<p>";
     echo "<a href=logout.php>Logout</a>"; -->

     <!DOCTYPE html>
     <html>
     <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Sitema Trioespuleta</title>
       <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" type='text/css'>
        <style>
          .navbar-login
          {
              width: 305px;
              padding: 10px;
              padding-bottom: 0px;
          }

          .navbar-login-session
          {
              padding: 10px;
              padding-bottom: 0px;
              padding-top: 0px;
          }

          .icon-size
          {
              font-size: 87px;
          }
        </style>
     </head>
     <body>
            <!-- navbar  -->
                  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a target="_blank" href="#" class="navbar-brand">SIS ESPULETA</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Inicio</a></li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu
                                    <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Algum link</a></li>
                                        <li><a href="#">Outro link</a></li>
                                    </ul>
                                 </li>
                             </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="fa fa-user"></span> 
                                        <strong>Nombre</strong>
                                        <em class="fa fa-chevron-down"></em>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-login">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="text-center">
                                                            <span class="fa fa-user fa-5x"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <p class="text-left"><strong>Usuario Admin</strong></p>
                                                        <p class="text-left small"><?php echo $username; ?></p>
                                                        <!-- <p class="text-left">
                                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="navbar-login navbar-login-session">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p>
                                                            <a href=logout.php class="btn btn-danger btn-block">Sair do sistema</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- endnavbar -->


          <!-- content -->

              <div class="container">
                  <div class="row">

                  <p></p>

                      <br>
                      <br>

                      <div class="col-md-12">
                           <h1 align="center">Controle de pedidos para compra</h1>
                          <div class="panel panel-success panel-table">
                            <div class="panel-heading">
                              <div class="row">
                                <div class="col col-xs-6">
                                  <h3 class="panel-title">Listagem de Pedidos</h3>
                                </div>
                                <!-- <div class="col col-xs-6 text-right">
                                  <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                </div> -->
                              </div>
                            </div>
                            <div class="panel-body">

                             <?php
                                $query = sprintf("SELECT * FROM compras");
                                $dados = mysql_query($query) or die(mysql_error());
                                $linha = mysql_fetch_assoc($dados);
                                $total = mysql_num_rows($dados);
                              ?>

                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th align="center">
                                            <a class="btn btn-default"><em class="fa fa-cogs fa-2x"></em></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php if($total > 0) {
                                  do {
                                ?>
                                <tr>
                                    <td><?=$linha['nome']?></td>
                                    <td><?=$linha['email']?></td>
                                    <td><?=$linha['endereco']?></td>
                                    <td><?=$linha['teleffone']?></td>
                                    <td align="center">
                                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                </tr>
                                <?php
                                // finaliza o loop que vai mostrar os dados
                                }while($linha = mysql_fetch_assoc($dados));
                                // fim do if
                                } ?>

                            </tbody>
                          </table>


                            </div>

                          </div>

                      </div>
                  </div>
              </div>
          <!-- endcontent -->
          <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
          <script src="../js/scripts.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
     </body>
     </html>

    <?php
    }
  }
}
 else{ //if the cookie does not exist, they are taken to the login screen
  header("Location: index.php");
 }
 ?>
