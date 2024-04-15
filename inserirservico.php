<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="caixinha.css">
    <title>Cadastro de Usuário</title>
</head>
<body class="body-style4">
    <div class="box4">
        <?php
            require_once "conexao.php";//incluir a conexão (BD)
            //buscando as informações do formulário
            $descricao = $_POST['descricao_servico'];
            $preco = $_POST['preco'];
            $disponibilidade = $_POST['disponibilidade'];
            $sql = "insert into Servicos (descricao_servico,preco,disponibilidade) 
            values ('$descricao',$senha,'$tipo')";
            //echo $sql;
            $conn->exec($sql);
            echo "<p>Salvo com sucesso.</p>";
        ?>
        <a href="">Voltar para Página principal</a>
    </div>
</body>
</html>