<?php
    include_once 'Conexao.php';
    include_once 'User.php';

    $con = new Conexao();
    $user = new User ();
    $user ->setEmail($_POST['email']);
    $user ->setSenha(MD5($_POST['senha']));

    $inserir = $con -> getPDO() -> prepare("SELECT id FROM usuario WHERE email = :email AND senha = :senha");
    $inserir->bindValue(':email', $user->getEmail());
    $inserir->bindValue(':senha', $user->getSenha());
    $inserir->execute();

    if($inserir->rowCount() == 1){
        $dados = $inserir->fetch();
        session_start();
        $_SESSION['id'] = $dados['id'];
        //$_SESSION['id'] = array($usuario['nome'], $usuario['tipoUser']);
        header('Location: ../view/index.php');
        exit;
    }else{
        header('Location: ../view/login.html');
        exit;
    }
?>