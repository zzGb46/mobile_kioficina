<!-- <?php 
// require_once('../../config/config.php');
// $titulo = 'Menu principal - Ki-oficina';
?> -->
<!DOCTYPE html>
<html lang="pt-br">

<?php 
require_once('template/head.php');
?>

<body>

    <section id="depoimentos">
        <div class="app">
            <h1>Deixe seu Depoimento</h1>
            <div class="box">
                <div class="campo">
                    <label for="texto-depoimento">Seu Depoimento:</label>
                    <textarea id="texto-depoimento"></textarea>
                </div>
                <div class="campo">
                    <label>Nota:</label>
                    <div class="estrelas">
                        ★ ★ ★ ★ ★
                    </div>
                </div>
                <button class="btn">Enviar Depoimento</button>
            </div>
            <a href="<?php echo BASE_URL; ?>index.php?url=menu"> <button class="btn-voltar">Voltar</button> </a><!-- Botão de Voltar agora está dentro da .app -->
        </div>
    </section>

</body>

</html>
