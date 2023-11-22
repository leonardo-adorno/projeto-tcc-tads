<form action="cadastro.php">
  Login: <input type="text" name="nomeUsuario"><br>
  Senha: <input type="password" name="senhaUsuario"><br>
  <input type="submit">
</form>

<?php

if(isset($_REQUEST['msg'])) {
  $msg = filter_var($_REQUEST['msg'], FILTER_SANITIZE_STRING);
  echo $msg;
}

?>

<a href="form.php">Login</a>