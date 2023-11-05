<?php

include '../preloader.php';

unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['nome']);

$_SESSION['message'] = '<p class="text-success text-center">Logout realizado com sucesso!</p>';

header('Location: ../login.php');
exit;
