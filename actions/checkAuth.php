<?php

if(!isset($_SESSION['id']) || !isset($_SESSION['email']) || !isset($_SESSION['nome'])) {
    $_SESSION['message'] = '<p class="text-danger text-center">Você precisa estar autenticado para poder etnrar no sistema!</p>';
    header('Location: login.php');
    exit;
}