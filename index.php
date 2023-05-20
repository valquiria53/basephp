<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div>
            <h2>LOJINHA DAS FLORES DA VALVAL</h2>
        </div>
        <form method="get" action="index.php">
            <fieldset>
                <legend>Cadastro de pedido de flores</legend>
                <table class="table_min" border="1">
                    <tr>
                        <td class="texto">
                            Nome
                        </td>
                        <td>
                            <input type="text" id="nome" name="nome" placeholder="Insira o seu nome">
                        </td>
                       
                    </tr>
                    <tr>
                        <td class="texto">
                            Email
                        </td>
                        <td>
                            <!-- int email = 10 -->
                            <input type="text" id="email" name="email" placeholder="Insira seu email">
                        </td>
                       
                    </tr>
                    <tr>
                        <td class="texto">
                            Telefone
                        </td>
                        <td>
                            <input type="text" id="fone" name="fone" placeholder="Informe seu telefone">
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Endereço
                        </td>
                        <td>
                            <input type="text" id="endereco" name="endereco"
                                   placeholder="Informe seu endereço">
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Quantidade de flores
                        </td>
                        <td>
                            <input type="number" id="quantidade" name="quantidade"
                                   placeholder="Informe quantidade de flores desejada">
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Tipos de flores
                        </td>
                        <td>
                            <input type="radio" id="tipo" name="tipo" value="tipo1">tipo1
                            <input type="radio" id="tipo" name="tipo" value="tipo2">tipo2<br>
                            <input type="radio" id="tipo" name="tipo" value="tipo3">tipo3
                            <input type="radio" id="tipo" name="tipo" value="tipo4">tipo4
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Cor
                        </td>
                        <td>
                            <select id="cor" name="cor">
                                <option value="">Selecione uma cor</option>
                                <option value="vermelho">vermelho</option>
                                <option value="azul">azul</option>
                                <option value="lilas">lilas</option>
                                <option value="lilas">amarelo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Salvar">
                            <input type="reset" value="Limpar campos">
                        </td>
                    </tr>
                </table>
                <img style="float: left; width: 20%; min-width: 150px; padding-top: 15px;" src="img/fofo.jpg" alt=""/>
                
            </fieldset>
            <?php
            //Se o que vier do formulário vier por meio de um get...faça isso.
            if ($_GET) {
                
                //printf("%s",$_GET);
                //print_r($_GET);
                @$email = $_GET['email'];
                @$nome = $_GET['nome'];
                @$fone = $_GET['fone'];
                @$endereco = $_GET['endereco'];
                @$quantidade = $_GET['quantidade'];
                @$tipo = $_GET['tipo'];
                @$cor = $_GET['cor'];
                
                if (empty($email)||empty($nome) || empty($endereco) || empty($quantidade) || empty($tipo) || empty($cor) || empty($fone)) {
                    echo('<div class="alert">Todos os campos do formulário são obrigatórios.</div>');
                }else{
                    echo('<fieldset>');
                        echo('<legend>');
                        echo('Dados cadastrados');
                        echo('</legend>');
                        //printf("Nome = %s",&nome); 
                        require_once './view/listarDadosAluno.php';
                    echo('</fieldset>');
                }
            }
            ?>
        </form>
    </body>
</html>
