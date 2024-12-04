<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Produtos</title>
</head>

<body>
    <center>
        <h1>Produtos Cadastrados</h1>

        <table border="4">
            <tr>
                <td>PRODUTO</td>
                <td>COR</td>
                <td>PESO</td>
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT * FROM PRODUTO");

                while($dado = mysqli_fetch_array($dados_select)) : ?>;
                        <tr>
                        <td><?= $dado[1] ?></td>
                        <td><?= $dado[2] ?></td>
                        <td><?= $dado[3] ?></td>
                        <td><form action="deleta_produto.php" method="post">
                            <input type="hidden" name="ID" value="<?= $dado[0] ?>">
                            <button type="submit">EXCLUIR</button>
                        </form></td>
                        </tr>
                <?php endwhile
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>