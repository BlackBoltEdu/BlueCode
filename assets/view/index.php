<?php
    
    session_start();
    if(isset($_SESSION['id'])){
        print_r($_SESSION['id']);
    }else{
        header('Location: ../view/login.html');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jefferson Eduardo">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/landingpage.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
    <header class="header">
        <div class="icon">
            <a class="logo" href="index.php"><i class="fa fa-paw" aria-hidden="true"></i>CANTINHO DO PET</a>
        </div>
        <nav>
            <ul class="menu">
                <li class="item-atendimento">
                    <a href="#">
                        <span class="ani">
                            ATENDIMENTO
                        </span>
                    </a>
                </li>
                
                <li class="item-login">
                    <a href="login.html">
                        <span class="item-login ani">
                            MINHA CONTA
                        </span>
                        <img class="icon-login ani" src="../image/login-icon.png" alt="">
                    </a>
                </li>

                <li class="item-carrinho">
                    <a href="#">
                        <span class="ani">
                            MEU CARRINHO
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="text">
                <h1>NÓS CUIDAMOS DO SEU PET!</h1>
                <p>Temos o compromisso de deixar seu pet feliz e saudável.</p>
            </div>
            
            <div class="imgBx">
                <img src="../image/cachorro.png" alt="cachorro">
            </div>
        </div>

        <div class="botao">
            <a href="#" ><button type="button">Veja mais</button></a>
        </div>
    </section>

    <script src="../javascript/script.js"></script>
</body>
</html>