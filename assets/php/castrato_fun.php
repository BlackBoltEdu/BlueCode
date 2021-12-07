<?php
    include_once 'Conexao.php';
    include_once 'User.php';
    
    $con = new Conexao();
    $user = new User();
    $user -> setNome(addslashes($_POST['nome']));
    $user -> setCpf(addslashes($_POST['cpf']));
    $user -> setEmail(addslashes(($_POST['email'])));
    $user -> setSenha(addslashes(MD5(($_POST['senha']))));
    $cargo = isset($_POST['cargo']) ? $cargo = $_POST['cargo'] : 0;

    echo "<pre>";
	    print_r($cargo);
    echo "</pre>";
    exit;

    //verificar se o e-mail já está cadastrado no banco
    $inserir = $con -> getPDO() -> prepare("SELECT id FROM funcionarios WHERE email = :email");
    $inserir -> bindValue (':email' , $user->getEmail());
    $inserir -> execute();

    if($inserir->rowCount() > 0){
        echo "<script>alert('Funcionario já cadastrado'); location.href='../view/cadastro.html'; </script>";
    }else{
        $inserir = $con -> getPDO() -> prepare("INSERT into funcionarios (nome, cpf, email, senha, cargo) VALUES (:nome,:cpf,:email,:senha,:cargo)");
        $inserir -> bindValue (':nome', $user->getNome());
        $inserir -> bindValue (':cpf', $user->getCpf());
        $inserir -> bindValue (':email', $user->getEmail());
        $inserir -> bindValue (':senha', $user->getSenha());
        $inserir -> bindValue (':cargo', $cargo);
        $inserir -> execute();
        echo 'location: ../view/cadastro_fun.php';
        return true;
    }
?>