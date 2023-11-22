<?php

$con = mysqli_connect('localhost', 'root', '', 'tcc_tads');
$nomeUsuario = filter_var($_REQUEST['nomeUsuario'], FILTER_SANITIZE_STRING);
$senhaUsuario = filter_var($_REQUEST['senhaUsuario'], FILTER_SANITIZE_STRING);
$sql = "SELECT * FROM usuario WHERE nomeUsuario = ?";
$prep = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($prep, 's', $nomeUsuario);
mysqli_stmt_execute($prep);
$res = mysqli_stmt_get_result($prep);
if(mysqli_num_rows($res) == 1){
  $linha = mysqli_fetch_assoc($res);
  if(password_verify($senhaUsuario, $linha['senhaUsuario'])){
    session_start();
    $_SESSION['nomeUsuario'] = $nomeUsuario;
    header('location: index.php');
    exit();
  }
  else{
    header('location: form.php?msg=Login e/ou senha inválidos');  
  }
}
else{
  header('location: form.php?msg=Login e/ou senha inválidos');
}
?>