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
    <section id="agendamento">
        <div class="app">
            <h1 class="titulo-agendamento">faça seu agendamento</h1>
            
            <div class="form-container">
                <div class="campo">
                    <label for="selecionar-veiculo">veículo:</label>
                    <select id="selecionar-veiculo">
                        <option>Honda Motor Co. Ltd. - Honda Civic</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="selecionar-data">data:</label>
                    <input type="date" id="selecionar-data">
                </div>

                <div class="campo">
                    <label for="selecionar-hora">horário:</label>
                    <input type="time" id="selecionar-hora">
                </div>

                <div class="campo">
                    <label for="selecionar-funcionario">Funcionário:</label>
                    <select id="selecionar-funcionario">
                        <option>Selecione um funcionário</option>
                    </select>
                </div>
                <div class="esse">

                    <button class="btn-confirmar">Agendar</button>
                </div>
            </div>

            <div class="acoes-agendamento">
                <a href="<?php echo BASE_URL; ?>index.php?url=menu"><button class="btn-retornar">Voltar</button></a> 
                <a href="listaAgendameto.html"><button class="btn-lista">Ver Agenda</button></a>
            </div>
        </div>
    </section>
</body>
</html>
