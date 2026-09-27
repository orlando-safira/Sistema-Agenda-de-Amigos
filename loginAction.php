<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'cabecalho.php';
require_once 'conexaoBD.php';

$nome  = $_POST['txtNome'] ?? '';
$senha = $_POST['txtSenha'] ?? '';

echo '<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle w3-center">';

$sql = "SELECT * FROM usuario WHERE nome = '$nome'";
$resultado = $conexao->query($sql);

if ($resultado && $linha = $resultado->fetch_assoc()) {
    if ($linha['senha'] === $senha) {
        $_SESSION['logado'] = $nome;
        echo '
            <a href="principal.php" style="text-decoration:none;">
                <h1 class="w3-button w3-teal w3-round-large">' . $nome . ', Seja Bem-Vinda!</h1>
            </a>';
    } else {
        echo '
            <a href="index.php" style="text-decoration:none;">
                <h1 class="w3-button w3-red w3-round-large">Login Inválido!</h1>
            </a>';
    }
} else {
    echo '
        <a href="index.php" style="text-decoration:none;">
            <h1 class="w3-button w3-red w3-round-large">Login Inválido!</h1>
        </a>';
}

$conexao->close();
echo '</div>';

require_once 'rodape.php';
?>