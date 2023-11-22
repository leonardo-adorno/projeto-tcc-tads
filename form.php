<style>
  body{
    background-image: radial-gradient( white, transparent 90%), url('https://img.freepik.com/fotos-gratis/caderno-de-despertador-e-lapis-em-uma-vista-superior-de-fundo-azul_169016-37965.jpg');
    background-repeat: no-repeat;
    background-position: center 90% ,left top;
    background-size: 100%, 100%, 8% 10%, 100%;
  }
  .form{
    border: 1px black;
    width: 600px;
    height: 400px;
    display: flex;
    position: relative;
    align-items: center;
    justify-content: space-evenly;
    text-align: center;
    background-color: #aebfeb;
    font-size: 20px;
    border-radius: 50px;
  }
  .container{
    display: flex;
    position: relative;
    align-items: center;
    justify-content: space-evenly;
    top: 20%;
  }

  .signup{
    display: flex;
    position: absolute;
    align-items: center;
    top: 90%;
    right: 45%
  }
  .button{
    margin-top: 10%;
    width: 100px;
    height: 30px;
    background: lightblue;
    border-radius: 10% 10% 10% 10%;
  }
</style>

<div class="container">
  <div class="form">
    <div class="titulo"><h1>Bem vindo!</h1><div>
    <div class="subtitulo"><h3>Faça Login</h3><div>
    <form action="login.php">
      Login: <input type="text" name="nomeUsuario"><br>
      Senha: <input type="password" name="senhaUsuario"><br>
      <input class="button" type="submit">
    </form>
  </div>
  <div class="signup">
    <a href="formCadastro.php">Cadastro</a>
  </div>
</div>

<?php

if(isset($_REQUEST['msg'])) {
  $msg = filter_var($_REQUEST['msg'], FILTER_SANITIZE_STRING);
  echo $msg;
}

?>

