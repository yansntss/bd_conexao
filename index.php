<?php
include("classe/conexao.php");

//VARIAVEL DE CONSULTA // COMANDO SQL
$consulta = "SELECT * FROM USUARIO ";

//VARIAVEL PARA ARMAZENAR A CONSULTA// VARIAVEL CRIADA NO "CONEXAO.PHP"
// VAI EFETUAR A CONSULTA E SE A CONSULTA DE ALGUM ERRO ELE VAI MATAR A EXECUÇÃO(die) E VAI MOSTRAR QUAL FOI O ERRO NO $mysqli
$con = $mysqli->query($consulta) or die ($mysqli->error);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tabela para armazenar os dados -->
    <table border ="1">
    <!-- tabela dados -->
        <tr >
            <td>Código</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Data de cadastro</td>
        </tr>

        <!-- essa funçao pega cada uma coluna do bd e armazena na tabela -->
        <?php while($dado = $con->fetch_array()){ ?>
        
        <!-- receber dados do banco de dados :) -->
        <tr>
            <!-- pegando os dados do bd. -->
            <!-- o while la em cima vai pegar todos os dados da tabela ja que eu solicitei * no select, e armazenar na variavel "dado". aqui embaixo eu printo a variavel "dado" e referencio o indice que eu quero, no caso, os indices do meu banco de dados -->

            <td><?php echo $dado["usu_codigo"]; ?></td>
            <td><?php echo $dado["usu_nome"]; ?></td>
            <td><?php echo $dado["usu_email"]; ?></td>
           
            <!-- o strtotime ela pega uma string(coluna no caso) e converte em formato timestamp(data por segundo   ) -->
            <td><?php echo date("d/m/Y", strtotime($dado["usu_datadecadastro"])); ?></td>
        </tr>
        <?php } ?>
    </table>

</body>

</html>