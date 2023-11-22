<?php

$con = mysqli_connect('localhost', 'root', '', 'tcc_tads');
$nomeUsuario = filter_var($_REQUEST['nomeUsuario'], FILTER_SANITIZE_STRING);
$senhaUsuario = filter_var($_REQUEST['senhaUsuario'], FILTER_SANITIZE_STRING);
$hash = password_hash($senhaUsuario, PASSWORD_DEFAULT);
try {
    $sql = "INSERT INTO usuario (nomeUsuario, senhaUsuario) VALUES (?, ?)";
    $prep = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prep, 'ss', $nomeUsuario, $hash);
    $res = mysqli_stmt_execute($prep);
} catch (Exception $e) {
    if (!$res){
        header('location: formCadastro.php?msg=' . mysqli_error($con));
        exit();
    }
        
}


header('location: form.php');

?>