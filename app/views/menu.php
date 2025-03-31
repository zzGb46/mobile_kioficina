
<?php 
require_once('../../config/config.php');
$titulo = 'Menu principal - Ki-oficina';
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php 
require_once('template/head.php');
?>

<body>

    <main>
        <section id="home">
            <div>
                <img src="<?php echo BASE_URL; ?>assets/img/logo-kioficina.svg" alt="logo-kioficina" class="logo">
                <h1>Bem-vindo à Ki-Oficina!</h1>
                <p>Olá, João Silva!</p>

                <div class="botoes">
                    <a href="agendamento.html" class="btn yellow">Agendamento</a>
                    <a href="listaServico.html" class="btn yellow">Listar Serviços</a>
                    <a href="depoimentos.html" class="btn yellow">Depoimentos</a>
                    <a href="perfil.html" class="btn yellow">Perfil</a>
                    <a href="index.html" class="btn red">Sair</a>
                </div>
            </div>
        </section>
    </main>

</body>

</html> 
