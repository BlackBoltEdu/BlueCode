<?php
    include_once 'Conexao.php';
    include_once 'User.php';

    $con = new Conexao();
    $user = new User ();
    $user ->setNome(addslashes($_POST['nome']));
    $user ->setCpf(addslashes($_POST['cpf']));
    $user ->setEmail(addslashes($_POST['email']));
    $user ->setSenha(addslashes(MD5($_POST['senha'])));

    //verificar se o e-mail já está cadastrado no banco
    $sql ="SELECT id FROM usuario WHERE email = :email";

    $inserir = $con -> getPDO() -> prepare($sql);
    $inserir -> bindValue (':email' , $user->getEmail());
    $inserir->execute();
    if($inserir->rowCount() > 0){
        echo "<script>alert('Usuário já cadastrado'); location.href='../view/cadastro.html'; </script>";
    }else{
        $sql ="INSERT into usuario (nome, cpf, email, senha) VALUES (:nome,:cpf,:email,:senha)";

        $inserir = $con -> getPDO() -> prepare($sql);
        $inserir -> bindValue (':nome' , $user->getNome());
        $inserir -> bindValue (':cpf', $user->getCpf());
        $inserir -> bindValue (':email' , $user->getEmail());
        $inserir -> bindValue (':senha' , $user->getSenha());
        $inserir->execute();
        echo "<script>alert('Usuário Cadastrado com sucesso'); location.href='../view/login.html'; </script>";
    }
?>