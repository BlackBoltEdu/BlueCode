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
        <?php require_once "./sidebar.html";?>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <!--CHAMANDO E COLOCANDO USUÁRIOS CADASTRADO EM UMA TABELA-->
            <tbody>
            <?php
                require_once "../php/BuscarFuncionario.php";
                $buscar = new BuscarFuncionario();
                
                $dados = $buscar->buscarFunc();

                if(count($dados)>0){
                    for($i=0; $i < count($dados); $i++){
                        echo "<tr>";
                        foreach($dados[$i] as $key => $func){
                            echo "<td>". $func ."</td>";
                        }
            ?>
                        <td><a class="edit" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="delete" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
            <?php
                        echo "</tr>";
                    }
                }
            ?>   
            </tbody>
        </table>
    </body>
</html>