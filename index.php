<?php 
require_once('config/config.php');
$titulo = 'Login - Ki-oficina';
?>
<!DOCTYPE html>
<html lang="pt-br">



<body>
<?php 
require_once('app/views/template/head.php');
?>
    <main>
        <section id="login">
            <div>
                <img src="assets/img/logo-kioficina.svg" alt="Logo Ki-Oficina" class="logo">
                <h1>Login</h1>

                <div class="caixa-form">
                    <div class="campo">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="campo">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>

                    <a href="menu.html"> <button type="submit" class="btn-entrar">Entrar</button></a>
                </div>
            </div>
        </section>
    </main>

</body>

</html>
