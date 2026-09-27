<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
    <h2 class="w3-center w3-teal w3-round-large w3-padding">Atualizar Amigo</h2>
    
    <form class="w3-container" action="atualizarAction.php" method="post">
        <input type="hidden" name="txtID" value="<?php echo $_GET['id'] ?? ''; ?>">
        
        <div class="w3-section">
            <label style="font-weight: bold;">Nome</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="txtNome" value="<?php echo $_GET['nome'] ?? ''; ?>" required>
            
            <label style="font-weight: bold;">Apelido</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="txtApelido" value="<?php echo $_GET['apelido'] ?? ''; ?>" required>
            
            <label style="font-weight: bold;">Email</label>
            <input class="w3-input w3-border" type="email" name="txtEmail" value="<?php echo $_GET['email'] ?? ''; ?>" required>
            
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>
</div>

<?php require_once 'rodape.php'; ?>