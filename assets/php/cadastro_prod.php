<?php
    include_once 'Conexao.php';

    $con = new Conexao();

    if(isset($_POST['btn-cadastrar']) && !empty($_POST['btn-cadastrar'])){
        // FILTRANDO OS DADOS DOS INPUT'S.
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        // ARRAY DOS FORMATOS PERMITIDOS.
        $formatosArquivo = array("png", "jpg", "jpeg", "svg");
        $extensao = pathinfo($_FILES['arquvios']['name'], PATHINFO_EXTENSION);
        
        if(in_array($extensao, $formatosArquivo)){
            $pasta = '../arquivos/';
            $caminhoTemp = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid() . ".$extensao";
            
            move_uploaded_file($caminhoTemp, $pasta . $novoNome);

            $nomeProd = addslashes($_POST['nomeProd']);
            $codigoProd = addslashes($_POST['codigoProd']);
            $valorProd = addslashes($_POST['valorProd']);
            $qntProd = addslashes($_POST['qntProd']);
            
            $inserirImg = $con->getPDO()->prepare("INSERT INTO produtos (nomeProd, codigoProd, valorProd, quantidadeProd, nomeArquivo) VALUE (:np, :cp, :vp, :qp, :na)");
            $inserirImg->bindValue(':np', $nomeProd);
            $inserirImg->bindValue(':cp', $codigoProd);
            $inserirImg->bindValue(':vp', $valorProd);
            $inserirImg->bindValue(':qp', $qntProd);
            $inserirImg->bindValue(':na', );
        }
    }
