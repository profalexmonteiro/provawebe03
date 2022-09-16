<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Clientes</title>
    </head>
    <body>

        <?php
            //Recuperação de parametros - Entrada
            $nome = $_GET["nome"];
            $cnpj = $_GET["cnpj"];
            
            //Processamento
            include_once("conexaobd.php");

            $sql = "INSERT INTO CLIENTE(NOME,CNPJ) VALUES('$nome','$cnpj');";

            mysqli_query($connection,$sql) or die("Erro cadastrar cliente");

            //Saída
            echo "Cliente cadastrado com sucesso<br>";
            echo "Nome: $nome<br>";
            echo "CNPJ: $cnpj<br>";
        ?>
       
    </body>
</html>