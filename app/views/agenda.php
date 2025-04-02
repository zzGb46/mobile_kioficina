<!-- ALTEREI O NOME PORQUE NÃO ESTAVA INDO ENTÃO IMPROVISEI COM O NOME DO ARQUIVO -->
<!-- <?php 
// require_once('../../config/config.php');
// $titulo = 'Lista Agendamento - Ki-oficina';
?> -->

<!DOCTYPE html>
<html lang="pt-br">
    
<?php 
require_once('template/head.php');
?>



<body>
    <section id="lista-agendamentos">
        <div class="app">
            <h1 class="titulo-lista">Lista de Agendamentos</h1>

            <div class="lista-container">
                <div class="agendamento">
                    <p><strong>Veículo:</strong> Honda Motor Co. Ltd. - Honda Civic</p>
                    <p><strong>Funcionário:</strong> Fernanda Oliveira</p>
                    <p><strong>Data Agenda:</strong> 29/08/2024 11:00</p>
                    <p class="status concluido">STATUS: CONCLUÍDO</p>
                </div>

                <div class="agendamento">
                    <p><strong>Veículo:</strong> Honda Motor Co. Ltd. - Honda Civic</p>
                    <p><strong>Funcionário:</strong> Juliana Mendes</p>
                    <p><strong>Data Agenda:</strong> 28/02/2025 11:00</p>
                    <p class="status cancelado">STATUS: CANCELADO</p>
                </div>

                <div class="agendamento">
                    <p><strong>Veículo:</strong> Honda Motor Co. Ltd. - Honda Civic</p>
                    <p><strong>Funcionário:</strong> Pedro Lima</p>
                    <p><strong>Data Agenda:</strong> 01/03/2025 08:00</p>
                    <p class="status analise">STATUS: EM ANÁLISE</p>
                </div>
            </div>

            <a href="<?php echo BASE_URL; ?>index.php?url=menu"><button class="btn-voltar">Voltar</button> </a>
        </div>
    </section>
</body>
</html>
