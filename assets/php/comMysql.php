<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  // Tenta se conectar ao servidor MySQL
  mysqli_connect('localhost', 'root', '') or trigger_error(mysqli_error());
  mysqli_select_db('usuarios') or trigger_error(mysqli_error());

  $usuario = mysqli_real_escape_string($_POST['usuario']);
  $senha = mysqli_real_escape_string($_POST['senha']);

?>