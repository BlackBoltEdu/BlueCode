<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Funcionários</title>
    </head>

    <body>
        <table>
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
                        echo "</tr>";
                    }
            ?>
                    <td><a href="#">Editar</a><a href="#">Deletar</a></td>
            <?php
                }
            ?>
                
            </tr> 
        </table>
    </body>
</html>