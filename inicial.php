<?php
session_start();
if(!$_SESSION['nomeUsuario']) {
    header('location: form.php');
    exit();
}
echo 'Olá, ' . $_SESSION['nomeUsuario'];
?>

<a href="logout.php">logout</a>

<br><br>
<a href="regras.php">REGRAS</a>
<a href="">ATIVIDADES</a>
