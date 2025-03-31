<?php 
require_once('../../config/config.php');
$titulo = 'Menu principal - Ki-oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php 
require_once('template/head.php');
?>

<body>
    <section id="perfil">
        <div class="app">
            <h1 class="titulo-perfil">Meu Perfil</h1>
            <div class="foto-container">
                <img src="IMG/member_2.jpg" alt="Foto de perfil">
                <span class="editar-foto">+</span>
            </div>

            <div class="form-container">
                <div class="campo">
                    <label>Nome:</label>
                    <input type="text" value="João Silva">
                </div>

                <div class="campo">
                    <label>Email:</label>
                    <input type="email" value="joao.silva@email.com">
                </div>

                <div class="campo">
                    <label>Telefone:</label>
                    <input type="text" value="11987654321">
                </div>

                <div class="campo">
                    <label>Endereço:</label>
                    <input type="text" value="Rua das Flores, 123">
                </div>

                <div class="campo">
                    <label>Bairro:</label>
                    <input type="text" value="Mogi">
                </div>

                <div class="linha-dupla">
                    <div class="campo">
                        <label>Cidade:</label>
                        <input type="text" value="São Paulo">
                    </div>

                    <div class="campo">
                        <label>Estado:</label>
                        <select>
                            <option selected>SP</option>
                        </select>
                    </div>
                </div>

                <div class="campo">
                    <label>Alterar Senha (Opcional):</label>
                    <input type="password" placeholder="Nova senha">
                </div>
            </div>

            <div class="acoes-perfil">
                <button class="btn-salvar">Salvar Alterações</button>
                <a href="index.html"><button class="btn-voltar">Voltar</button></a>
            </div>
        </div>
    </section>
</body>
</html>
