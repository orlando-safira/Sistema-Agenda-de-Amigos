<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>
<?php require_once 'conexaoBD.php'; ?>

<div class="w3-padding w3-content w3-half w3-display-middle w3-center">
    <h2 class="w3-center w3-teal w3-round-large w3-padding">Listagem de Amigos</h2>
    
    <table class="w3-table-all w3-centered w3-hoverable">
        <thead>
            <tr class="w3-teal">
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Excluir</th>
                <th>Atualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM amigos";
            $resultado = $conexao->query($sql);
            
            if ($resultado && $resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    $id = $linha['idamigo'];

                    echo '<tr>';
                    echo '<td>' . $id . '</td>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['apelido'] . '</td>';
                    echo '<td>' . $linha['email'] . '</td>';
                    echo '<td><a href="excluir.php?id=' . $id . '&nome=' . urlencode($linha['nome']) . '&apelido=' . urlencode($linha['apelido']) . '&email=' . urlencode($linha['email']) . '"><i class="fa fa-user-times w3-large w3-text-teal"></i></a></td>';
                    echo '<td><a href="atualizar.php?id=' . $id . '&nome=' . urlencode($linha['nome']) . '&apelido=' . urlencode($linha['apelido']) . '&email=' . urlencode($linha['email']) . '"><i class="fa fa-refresh w3-large w3-text-teal"></i></a></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">Nenhum registro encontrado.</td></tr>';
            }
            
            $conexao->close();
            ?>
        </tbody>
    </table>
    
    <br>
    <a href="principal.php" class="w3-button w3-teal w3-round-large">Voltar</a>
</div>

<?php require_once 'rodape.php'; ?>