<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
    <h2 class="w3-center w3-teal w3-round-large w3-padding">Cadastrar Amigo</h2>
    
    <form class="w3-container" action="cadastroAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">Nome</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNome" required>
            
            <label style="font-weight: bold;">Apelido</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o apelido" name="txtApelido" required>
            
            <label style="font-weight: bold;">Email</label>
            <input class="w3-input w3-border" type="email" placeholder="Digite o email" name="txtEmail" required>
            
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Cadastrar</button>
        </div>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
