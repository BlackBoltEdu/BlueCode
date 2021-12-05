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

    <body class="b-corpo">
        <?php require_once "./sidebar.html"?>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th class="btn-crud">Ação</th>
                </tr>
            </thead>

            <!--CHAMANDO E COLOCANDO USUÁRIOS CADASTRADO EM UMA TABELA-->
            <tbody>
                <?php
                    require_once "../php/CrudFuncionarios.php";
                    $func = new CrudFuncionarios();
                    
                    $dados = $func->buscarTodosFunc();

                    if(count($dados)>0){
                        for($i=0; $i < count($dados); $i++){
                            echo "<tr>";
                            foreach($dados[$i] as $key => $value){
                                if($key != "id"){
                                    echo "<td>". $value ."</td>";
                                } 
                            }
                ?>
                            <td class="btn-crud">
                                <a class="btn-edit-delete" id="editar" href="<?= $_SERVER['PHP_SELF'] ?>?id_up=<?php echo $dados[$i]['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="btn-edit-delete" href="./listaFunc.php?id=<?php echo $dados[$i]['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                <?php
                            echo "</tr>";
                        }
                    }else{
                        echo "Nenhum registro no banco de dados";
                    }
                ?>   
            </tbody>
        </table>
        <?php
            if(isset($_GET['id_up'])){
                $id_update = addslashes($_GET['id_up']);
                $update = $func->buscarFuncionario($id_update);
           }
        ?>

        <?php
            if(isset($_POST['btn-atualizar']) && !empty($_POST['btn-atualizar'])){
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                if(isset($_GET['id_up']) && !empty($_GET['id_up'])){
                    $id = addslashes($_GET['id_up']);
                    $nome = addslashes($dados['nome']);
                    $email = addslashes($dados['email']);
                    $cpf = addslashes($dados['cpf']);
                    $tipoUse = addslashes($dados['cargo']);

                   

                    if(!empty($id) && !empty($nome) && !empty($email) && !empty($cpf) && !empty($tipoUse)){
                        //VERIFICAR SE O E-MAIL JÁ ESTÁ CADASTRADO
                        if($func->atualizarFuncionario($id, $nome, $email, $cpf, $tipoUse)){
                            echo "<p id='msg-att' class='msg-atualizado'> Alteração de cadastro feita com sucesso! </p>";
                            // header('Location:' . $_SERVER['PHP_SELF']);
                        }
                    }else{

                    }
                }
            }
        ?>
        
        <?php 
            if(isset($_GET['id_up']) && !empty($_GET['id_up'])){
        ?>
            <div class="modal-container" id="modal-atualizar">
                <div class="modal">
                    <form method="POST">
                        <div class="dflex">
                            <h1>Atualização de Dados - <?php if(isset($update)){ echo $update['nome'];}?></h1>
                            
                            <div class="label-modal">
                                <label class="t3" for="nome">Nome</label>
                                <label  for="nome">E-mail</label>
                            </div>

                            <div class="input-modal">
                                <input type="text" id="nome" name="nome" value="<?php if(isset($update)){ echo $update['nome']; }?>">
                                <input type="text" id="email" name="email" value="<?php if(isset($update)){ echo $update['email']; }?>">
                            </div>
                                                    
                            <div class="label-modal second">
                                <label for="nome">CPF</label>
                                <label for="nome">Cargo</label>
                            </div>

                            <div class="input-modal second">
                                <input type="text" id="cpf" name="cpf" value="<?php if(isset($update)){ echo $update['cpf']; }?>" onkeyup="mascara_cpf()" maxlength="14">
                                <input type="text" id="cargo" name="cargo" value="<?php if(isset($update)){ echo $update['tipoUse']; }?>">
                            </div>

                        </div>
                        
                        <!-- BOTÕES -->  
                        <input type="submit" id="ativar" name="btn-atualizar" class="btn-atualizar" value="Atualizar">
                        <a class="btn-fechar" href="<?= $_SERVER['PHP_SELF'] ?>">Cancelar</a>
                        <a class="x-fechar" href="<?= $_SERVER['PHP_SELF'] ?>">x</a>
                    </form>
                </div>
            </div>
            <script src="../javascript/validacao_cpf.js"></script>
        <?php }?>
        <div class='load'></div>
        <script src="../javascript/script.js"></script>
    </body>  
</html>

<!-- Pegando o ID do funcionario e deletando do banco
    Após isso redirecionando para listaFunc.php -->
<?php
    if(isset($_GET['id'])){
        $id_delete = addslashes($_GET['id']);
        $func->deletarFunc($id_delete);
        header('location: ./listaFunc.php');
        exit;
    }
?>