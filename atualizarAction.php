<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>
<?php require_once 'conexaoBD.php'; ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle w3-center">
<?php
$id      = $_POST['txtID'] ?? '';
$nome    = $_POST['txtNome'] ?? '';
$apelido = $_POST['txtApelido'] ?? '';
$email   = $_POST['txtEmail'] ?? '';

$sql = "UPDATE amigos SET nome = '$nome', apelido = '$apelido', email = '$email' WHERE idamigo = '$id'";

if ($conexao->query($sql) === TRUE) {
    echo '
        <a href="listar.php" style="text-decoration:none;">
            <h1 class="w3-button w3-teal w3-round-large">Amigo Atualizado com Sucesso!</h1>
        </a>';
} else {
    echo '
        <a href="listar.php" style="text-decoration:none;">
            <h1 class="w3-button w3-red w3-round-large">Erro ao Atualizar!</h1>
        </a>';
}

$conexao->close();
?>
</div>

<?php require_once 'rodape.php'; ?>