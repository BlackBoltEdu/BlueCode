<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Funcionários</title>
        <link rel="stylesheet" href="../css/style_funcionario.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <header>
            <nav class="container-side">
                <div class="link" id="pet">
                    <div class="texto">
                        <a class="teste" href="index.php" style="letter-spacing: 0.5px; font-size: 18px; align-items: center; ;"><i
                                class="fa fa-paw" aria-hidden="true" style="padding-right: 10px;"></i><strong>CANTINHO DO
                                PET</strong></a>
                    </div>
                </div>

                <div class="link">
                    <div class="texto">
                        <a class="teste" href="cadastro_prod.html">
                            <span class="ani"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                Cadastrar Produto
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="link">
                    <div class="texto">
                        <a class="teste" href="cadastro_fun.html">
                            <span class="item-login ani"><i class="fa fa-id-card" aria-hidden="true"></i>
                                Cadastrar Funcionário
                            </span>
                        </a>
                    </div>
                </div>

                <div class="link">
                    <div class="texto">
                        <a class="teste" href="#">
                            <span class="ani"><i class="fa fa-list" aria-hidden="true"></i>
                                Lista de Funcionários
                            </span>
                        </a>
                    </div>
                </div>

                <div class="link">
                    <div class="texto">
                        <a class="teste" href="#">
                            <span class="ani"><i class="fa fa-list-alt" aria-hidden="true"></i>
                                Lista de Produtos
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <table class="content-table">
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>CPF</td>
                <td colspan="2">Cargo</td>
            </tr>

            <?php
                require_once "../php/Conexao.php";
                $con = new Conexao();
                
                $dados = $con->buscarFunc();

                if(count($dados)>0){
                    for($i=0; $i < count($dados); $i++){
                        echo "<tr>";
                        foreach($dados[$i] as $func => $value){
                            echo "<td>". $value ."</td>";
                        }
            ?>
                        <td><a class="edit" href="#">Editar</a><a class="edit" href="#">Deletar</a></td>
            <?php
                        echo "</tr>";
                    }
            
                    
            
                }
            ?>
                
            </tr> 
        </table>
    </body>
</html>