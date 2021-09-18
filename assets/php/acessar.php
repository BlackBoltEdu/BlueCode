<?php
    include_once 'Conexao.php';
    include_once 'User.php';

    $con = new Conexao();
    $user = new User ();
    $user ->setEmail($_POST['email']);
    $user ->setSenha(MD5($_POST['senha']));

    $sql ="select id from usuario where email = :email";

    $inserir = $con -> getPDO() -> prepare($sql);
    $inserir -> bindValue (':email' , $user->getEmail());
    $inserir -> bindValue (':senha' , $user->getSenha());
    
    $inserir->execute();

    /*if (isset($_POST['email']) && !empty($_POST['email'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }*/
?>