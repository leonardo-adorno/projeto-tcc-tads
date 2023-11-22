<style>
  body{
    background-image: radial-gradient( white, transparent 90%), url('https://img.freepik.com/fotos-gratis/caderno-de-despertador-e-lapis-em-uma-vista-superior-de-fundo-azul_169016-37965.jpg');
    background-repeat: no-repeat;
    background-position: center 90% ,left top;
    background-size: 100%, 100%, 8% 10%, 100%;
  }
</style>

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
