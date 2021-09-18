<?php
    include_once 'Conexao.php';
    include_once 'User.php';

    $con = new Conexao();
    $user = new User ();
    $user ->setNome($_POST['nome']);
    $user ->setCpf($_POST['cpf']);
    $user ->setEmail($_POST['email']);
    $user ->setSenha(MD5($_POST['senha']));

    //verificar se o e-mail já está cadastrado no banco
    $sql ="select id from usuario where email = :email";

    $inserir = $con -> getPDO() -> prepare($sql);
    $inserir -> bindValue (':email' , $user->getEmail());
    $inserir->execute();
    if($inserir->rowCount() > 0){
        return false;
    }else{
        $sql ="insert into usuario (nome, cpf, email, senha) values (:nome,:cpf,:email,:senha)";

        $inserir = $con -> getPDO() -> prepare($sql);
        $inserir -> bindValue (':nome' , $user->getNome());
        $inserir -> bindValue (':cpf', $user->getCpf());
        $inserir -> bindValue (':email' , $user->getEmail());
        $inserir -> bindValue (':senha' , $user->getSenha());
        $inserir->execute();
        return true;
    }

    /*if (isset($_POST['email']) && !empty($_POST['email'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }*/
?>