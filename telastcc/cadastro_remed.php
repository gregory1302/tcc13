<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("navbar.html");
    include("bootstrap.html");
    include("conexao.php");
    if (isset($_POST['btnSalvar'])) {
        $nome_remed = $_POST['nomeremed'];
        $descricao = $_POST['descricao'];
        $dosagem = $_POST['dosagem'];
        $obs = $_POST['obs'];


        $sql = "INSERT INTO medicamentos (nome_remed, descricao, dosagem, obs)
					VALUES ('$nome_remed', '$descricao', '$dosagem', '$obs')";

        mysqli_query($con, $sql);
        //echo $sql;
        mysqli_close($con); ?>
        <div id="tabela-conteiner">
            <table class="table table-info table-bordered">

                <td> <?php echo 'nome: '; ?></td>
                <td> <?php echo  $nome_remed; ?></tr>
                <td> <?php echo 'Descrição: '; ?></td>
                <td> <?php echo $descricao; ?></tr>
                <td> <?php echo 'Dosagem: '; ?></td>
                <td> <?php echo $dosagem; ?></tr>
                <td> <?php echo 'Observação: '; ?></td>
                <td> <?php echo $obs; ?></tr>
            </table>
            <a href="cadastro_remed.php">cadastrar outro remedio</a>
        <?php } else {
        ?>
            <title>Cadastro Medicamentos</title>
            <div id="cad-conteiners">
                <form id="2" action="cadastro_remed.php" method="POST">
                    <label>Nome</label> <input class='form-control' type="text" name="nomeremed">
                    <label>Descrição</label> <input class='form-control' type="text" name="descricao">
                    <label>Dosagem</label> <input class='form-control' type="text" name="dosagem">
                    <label>Observações</label> <input class='form-control' type="text" name="obs"><br>
                    <input class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
                    <input class='btn btn-info' type="reset" value="Limpar campos" />
            </div>
        <?php } ?>
</body>

</html>