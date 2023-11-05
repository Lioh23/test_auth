<?php  $title = 'Registrar-se' ?>

<?php include_once 'preloader.php' ?>
<?php include_once 'templates/head.php' ?>


<main class="login-content">
    <h2 class="text-center mb-5">Registrar-se</h2>

    <form method="POST" action="actions/registerAction.php">
        <!-- Nome -->
        <div class="form-outline mb-5">
            <input type="text" id="nome" name="nome" class="form-control <?= isset($_SESSION['error']['nome']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['post']['nome'] ?? '' ?>" required />
            <label class="form-label" for="nome">Nome</label>
            <?= isset($_SESSION['error']['nome']) ? '<div class="invalid-feedback">' . $_SESSION['error']['nome'] . '</div>' : '' ?>
        </div>

        <!-- E-Mail -->
        <div class="form-outline mb-5">
            <input type="text" id="email" name="email" class="form-control <?= isset($_SESSION['error']['email']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['post']['email'] ?? '' ?>" required />
            <label class="form-label" for="email">E-Mail</label>
            <?= isset($_SESSION['error']['email']) ? '<div class="invalid-feedback">' . $_SESSION['error']['email'] . '</div>' : '' ?>
        </div>

        <!-- Senha -->
        <div class="form-outline mb-5">
            <input type="password" id="senha" name="senha" class="form-control <?= isset($_SESSION['error']['senha']) ? 'is-invalid' : '' ?>" value="" required />
            <label class="form-label" for="senha">Senha</label>
            <?= isset($_SESSION['error']['senha']) ? '<div class="invalid-feedback">' . $_SESSION['error']['senha'] . '</div>' : '' ?>
        </div>

        <!-- Repita a senha -->
        <div class="form-outline mb-5">
            <input type="password" id="repita_senha" name="repita_senha" class="form-control <?= isset($_SESSION['error']['repita_senha']) ? 'is-invalid' : '' ?>" value="" required />
            <label class="form-label" for="repita_senha">Repita a senha</label>
            <?= isset($_SESSION['error']['repita_senha']) ? '<div class="invalid-feedback">' . $_SESSION['error']['repita_senha'] . '</div>' : '' ?>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4" value="Salvar" />

        <!-- Register buttons -->
        <div class="text-center">
            <p><a href="login.php">Votlar</a></p>
        </div>
    </form>
</main>

<?php include 'templates/footer.php' ?>

<?php 
if(isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

if(isset($_SESSION['post'])) {
    unset($_SESSION['post']);
}
?>