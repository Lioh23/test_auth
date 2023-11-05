<?php

include '../preloader.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['login_mail'] = $email;

// validações

// usuário válido
if(strlen($email) < 3 || !strpos($email, '@')) {
    $_SESSION['message'] = '<p class="text-danger text-center">Usuário ou senha inválida!</p>';
    header('Location: ../login.php');
    exit;
}

// senha válida
if(strlen($senha) < 8) {
    $_SESSION['message'] = '<p class="text-danger text-center">Usuário ou senha inválida!</p>';
    header('Location: ../login.php');
    exit;
}

// usuário existe
$sql = "SELECT id, nome, email, password_hash FROM usuarios WHERE email = :email";

$connection = getConnection();

$statement = $connection->prepare($sql);
$statement->bindParam(':email', $email);
$statement->execute();


$usuario = $statement->fetch(PDO::FETCH_ASSOC);

if(!$usuario) {
    $_SESSION['message'] = '<p class="text-danger text-center">Usuário ou senha inválida!</p>';
    header('Location: ../login.php');
    exit;
}

// senha informada é igual a do banco de dados

if(!password_verify($senha, $usuario['password_hash'])) {
    $_SESSION['message'] = '<p class="text-danger text-center">Usuário ou senha inválida!</p>';
    header('Location: ../login.php');
    exit;
}

$_SESSION['id'] = $usuario['id'];
$_SESSION['email'] = $usuario['email'];
$_SESSION['nome'] = $usuario['nome'];

$_SESSION['message'] = '<p class="text-danger text-center">Usuário ou senha inválida!</p>';
header('Location: ../index.php');
exit;