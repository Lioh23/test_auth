<?php  $title = 'Login' ?>

<?php include_once 'preloader.php' ?>
<?php include_once 'templates/head.php' ?>

<main class="login-content">
    <h2 class="text-center mb-5">Login</h2>

    <?= $_SESSION['message'] ?? ''  ?>
    <form method="POST" action="actions/loginAction.php">
        <!-- Email input -->
        <div class="form-outline mb-5">
            <input type="email" id="email" name="email" class="form-control" value="<?= $_SESSION['login_mail'] ?? '' ?>" />
            <label class="form-label" for="email">E-Mail</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-5">
            <input type="password" id="senha" name="senha" class="form-control" />
            <label class="form-label" for="senha">senha</label>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar" />

        <!-- Register buttons -->
        <div class="text-center">
            <p>Ainda não se inscreveu? <a href="register.php">Registre-se!</a></p>
        </div>
    </form>
</main>

<?php include 'templates/footer.php' ?>

<?php 
    if(isset($_SESSION['message'])) {
        unset($_SESSION['message']);
    }
    if(isset($_SESSION['login_mail'])) {
        unset($_SESSION['login_mail']);
    }
?>
