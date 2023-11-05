<?php

include '../preloader.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmacaoSenha = $_POST['repita_senha'];

// validar as informações
if(strlen($nome) < 3) {
    $_SESSION['error']['nome'] = 'O nome precisa conter 3 ou mais caracteres';
}

if(strlen($email) < 3) {
    $_SESSION['error']['email'] = 'O E-mail precisa conter 3 ou mais caracteres';
}

if(!strpos($email, '@')) {
    $_SESSION['error']['email'] = 'O E-mail é inválido';
}

if(strlen($senha) < 8) {
    $_SESSION['error']['senha'] = 'A senha precisa conter 8 ou mais caracteres';
}

if($senha != $confirmacaoSenha) {
    $_SESSION['error']['repita_senha'] = 'As senhas precisam ser iguais';
}

if(isset($_SESSION['error'])) {
    $_SESSION['post'] = $_POST;
    header('Location: ../register.php');
    exit;
}


// gerar a hash da senha
$passwordHash = password_hash($senha, PASSWORD_DEFAULT);


// salvar informações no banco de dados;
$connection = getConnection();

$sql = "INSERT INTO usuarios (nome, email, password_hash, created_at, updated_at)
        values (:nome, :email, :password_hash, now(), now())";

$statement = $connection->prepare($sql);

$statement->bindParam(':nome', $nome);
$statement->bindParam(':email', $email);
$statement->bindParam(':password_hash', $passwordHash);

$statement->execute();

// redirecionar para a página de login
$_SESSION['message'] = '<p class="text-success text-center">Cadastro criado com sucesso!</p>';
header('Location: ../login.php');