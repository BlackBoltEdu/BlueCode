<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Cadastro - Funcionário</title>
    <link rel="stylesheet" href="../css/style_funcionario.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require_once "./sidebar.html"?>

    <div class="center">
        <main class="container">
            <h1>Cadastro - Funcionário</h1>
            <form action="../php/castrato_fun.php" method="post">
                        <!--Nome-->
                <div class="input-field">
                    <label for="">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required autocomplete="off">
                    <div class="underline"></div></br>
                </div>

                        <!--E-mail-->
                <div class="input-field">
                    <label for="">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    <div class="underline"></div></br>
                </div>

                        <!--Senha-->
                <div class="input-field">
                    <label for="">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    <div class="underline"></div></br>
                </div>

                        <!--Conf. Senha-->
                <div class="input-field">
                    <label for="">Confirmar Senha</label>
                    <input type="password" id="confsenha" name="confsenha" placeholder="Confirme sua senha" required>
                    <div class="underline"></div></br>
                </div>

                        <!--CPF-->
                <div class="input-field">
                    <label for="">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required maxlength="14"
                        autocomplete="off" onkeyup="mascara_cpf()">
                    <div class="underline"></div></br>
                </div>

                        <!--Cargo-->
                <div class="input-field">
                    <label for="">Cargo</label>
                    <select name="cargo" id="cargo">
                        <option selected disabled value="1">Selecione sua função:</option>
                        <option value="2">Vendedor(a)</option>
                        <option value="3">Atendente(a)</option>
                        <option value="4">Veterinário(a)</option>
                    </select></br>
                </div>

                <div class="botoes">
                    <button class="reset" type="reset">Redefinir</button>

                    <button class="botao" type="submit">Cadastrar</button>
                </div>
            </form>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/d7ba26eefd.js" crossorigin="anonymous"></script>
</body>
</html>