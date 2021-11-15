<?php
    include_once 'Conexao.php';
    include_once 'User.php';

    $con = new Conexao();
    $user = new User ();
    $user ->setEmail($_POST['email']);
    $user ->setSenha(MD5($_POST['senha']));

    $sql ="SELECT id FROM usuario WHERE email = :email AND senha = :senha";

    $inserir = $con -> getPDO() -> prepare($sql);
    $inserir->bindValue(':email', $user->getEmail());
    $inserir->bindValue(':senha', $user->getSenha());
    $inserir->execute();
    //var_dump($inserir->fetchAll());

    if($inserir->rowCount() == 1){
        $dados = $inserir->fetch();
        session_start();
        $_SESSION['id'] = array($usuario['nome'], $usuario['tipoUser']);
        header('Location: ../view/index.php'); 
        echo "DEU BOM 2!!";
        exit;
    }else{
        echo "DEU RUIM!!!";
        return false;
    }
?>