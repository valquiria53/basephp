<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elementos de formulário do boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .borda{
                border: 1px solid greenyellow;
            }
        </style>
    </head>
    <body class="container">
        <div class="row borda">
            <div class="col col-lg-12 text-center">
                MENU
            </div>
        </div>
        <div id="divForms" class="row borda">
            <div class="col col-lg-8">
                <form method="post" action="formsBoostrap.php">

                    <!-- Control matricula -->
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email">
                    <!-- Control nome -->
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" 
                           placeholder="Insira seu nome" name="nome">
                    <!-- Control telefone -->
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" 
                           placeholder="Insira seu telefone" name="telefone">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" 
                           placeholder="Insira seu endereco" name="endereco">
                    <input type="text" class="form-control" id="quantidade" 
                           placeholder="Insira a quantidade desejada" name="quantidade">
                    <label for="divTipos" class="form-label">Tipo:</label>
                    <div id="divtipos" class="form-check">
                        <div class="row">
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="tipo"
                                       name="tipo" value="vermelho" checked>tipo1
                            </div>
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="tipo"
                                       name="tipo" value="azul" checked>tipo2
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="tipo"
                                       name="tipo" value="lilas" checked>tipo3
                            </div>
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="tipo"
                                       name="tipo" value="amarelo" checked>tipo4
                            </div>
                        </div>
                    </div>

                    <label for="cor" class="form-label">Cor:</label>
                    <select id="cor" name="cor" class="form-select">
                        <option value="vermelho">vermelho</option>
                        <option value="azul">azul</option>
                        <option value="lilas">lilas</option>
                        <option value="amarelo">amarelo</option>
                    </select>
                    <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                        <div class="col col-lg-12">
                            <input type="submit" class="btn btn-success btn-group-lg" value="Enviar">
                        </div>
                    </div>
                </form>
            </div><!-- final da div 8 -->
            <div class="col col-lg-4">
                <img src="img/livro.jpg" class="img-fluid rounded-circle" alt=""/>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-12 borda">
                <?php
                if ($_POST) {
                    print_r($_POST);
                    //Dei mais uma incrementada para ajudar vcs pessoal. Sigam com o PHP por aqui.
                    //Abraço.
                }
                ?>
            </div>
        </div>
    </body>
</html>
