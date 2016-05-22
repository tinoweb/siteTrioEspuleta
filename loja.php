    <?php include_once 'parts/header.php'; ?>


    <body style="overflow-x: hidden;">
        <!-- Top content -->
        <div class="top-content section-container-3">
            <!-- Top menu -->
            <nav class="navbar navbar-inverse na vbar-no-bg" role="navigation" style=" width: 100%;">

                <div class="container">

                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-target="#top-navbar-1" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse cor-menu" id="top-navbar-1">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="nav navbar-nav navbar-left">
                                    <li>
                                        <a class="" href="index.php" style="color: red;">
                                           <i class="fa fa-chevron-left"></i> Voltar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <img alt="" src="img/logo.png" class="logotipo">
                            </div>
                        </div>
                    </div>
                </div>

            </nav>

            <!-- Always beautiful -->
            <div class="testimonials-container section-container-3 letras-footer">
                <div class="container">
                    <div class="row" style="position: relative;top: 80px">

                            <h2 class="letras-footer">
                                Loja
                            </h2>
                        <div id="result" role="alert" style="color: #54F723;">

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        Explorando o Coração
                                    </div>
                                    <div class="panel-body">
                                        <img alt="" src="img/livro-aberto.png">
                                            <hr>
                                            <h3 class="label label-danger">Descrição do Produto:</h3>
                                           
                                              <div class="card card-block desc_book" style="">
                                                EXPLORANDO O CORAÇÃO é o primeiro livro da Série “AS AVENTURAS DO TRIO ESPULETA”.
                                                Além das crianças Mikaela, Mirela e Lucca, o livro apresenta um personagem querido e
                                                apaixonante “O TOM”. Tom leva a turminha para uma viagem inesquecível pelo interior do
                                                coração. Sentados sobre um “barquinho” eles exploram os espaços e aprendem sobre o
                                                funcionamento desse órgão tão importante.
                                              </div>
                                            <hr>
                                             <table class="table" style="color: #000;" align="center">
                                                <tbody align="left">
                                                   <tr>
                                                    <td class="info">Acabamento:</td>
                                                    <td class="success">Capa dura</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Altura:</td>
                                                    <td class="success">25.00 cm</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Largura:</td>
                                                    <td class="success">25.00 cm</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Numero de Páginas:</td>
                                                    <td class="success">30</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Total</td>
                                                    <td class="success pricebook">R$ 39,90</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        Dados para Compra:
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="formDcompra">

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="submit" name="insert" class="btn btn-group btn-success" style="width: 100%" value="Salvar dados para compra">
                                            </div>
                                          </div>

                                        </form>

                                           <div class="form-group">
                                                <div class="col-sm-6">
                                                  <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                    <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                    <input type="hidden" name="itemCode" value="0795C874B6B6716BB482CFB7386EA17F" />
                                                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                    </form>
                                                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- PAGAMENTO PAYPAL-->
                                                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="hosted_button_id" value="F3R6ZB2BFRMP6">
                                                    <input type="image" src="img/paypal.png" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
                                                    <img alt="" border="0" src="img/paypal.png" width="1" height="1">
                                                    </form>

                                                    <!-- FINAL FORMULARIO BOTAO PAYPAL -->

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="fuid-container" style="background-color: #009180">
    <div class="row">
        <div class="col-md-12">
            <p style="text-align: justify; color: rgb(255, 161, 0); font-size: 13px; position:relative; left: 30%">
                Realização: Projet'Art | Design: Agência Zoom - Unasp-EC | Desenvolvimento: <a target="_blank" href="http://www.softlike.com.br" style="color: #fff;">Softlike</a>
            </p>
        </div>
    </div>
</div>

<?php include_once 'parts/querys.php'; ?>
