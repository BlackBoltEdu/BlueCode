<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Produto</title>
    <link rel="stylesheet" href="../css/style_funcionario.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require_once "./sidebar.html"?>

    <?php
        if(isset($_GET['c']) && !empty($_GET['c']) && $_GET['c'] == true){
                echo "<p class='msg-atualizado'>Testedsgsdgsdgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg </p>";
        }
        $teste = true;
    ?>
    <div class="center">
        <main class="container">
            <h1>Cadastro - Produto</h1>
            <form action="../php/cadastro_prod.php" method="post" enctype="multipart/form-data">
                <!--Nome-->
                <div class="input-field">
                    <label for="">Nome</label>
                    <input type="text" id="nomeP" name="nomeProd" placeholder="Digite o nome do produto" required
                        autocomplete="off">
                    <div class="underline"></div></br>
                </div>

                <!--E-mail-->
                <div class="input-field">
                    <label for="">Código do Produto</label>
                    <input type="text" id="cProd" name="codigoProd" placeholder="Digite o código de barras" required>
                    <div class="underline"></div></br>
                </div>

                <!--Senha-->
                <div class="input-field">
                    <label for="">Valor</label>
                    <input type="text" id="valorP" name="valorProd" placeholder="Digite o valor do produto" required>
                    <!--COLOCAR EM REAL-->
                    <div class="underline"></div></br>
                </div>

                <div class="input-field">
                    <label for="">Quantidade</label>
                    <input type="number" id="qntD" name="qntProd" placeholder="Digite a quantidade" required>
                    <div class="underline"></div></br>
                </div>

                <!--IMAGEM DO PRODUTO-->
                <label for="">Data da Entrega</label>
                <input type="file" id="data" name="arquivo" required>
                <div class="underline"></div></br>

                <!--BOTÕES-->
                <div class="botoes">
                    <button class="reset" type="reset">Redefinir</button>

                    <button class="botao" type="submit" name="btn-cadastrar" value="cadastrar">Cadastrar</button>
                </div>
            </form>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/d7ba26eefd.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
    // if(isset($teste) && $teste == true){
    //     sleep(5);
    //     echo "<script> location.href='./cadastro_prod.php'; </script>";
    // }
?>