<?php
include "actions.php";
$usuarios = selecionarTabela('usuarios');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome'])) {
        $nome = $_POST["nome"];
        if ($nome != "") {
            criarUsuario($nome);
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJETO COM PHP</title>
</head>

<body>
    <h1>
        Lista de Usuários
    </h1>
    <hr>
    <ul>
        <?php if (mysqli_num_rows($usuarios) > 0): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <!-- dentro do foreach -->
                <li>
                    <?php echo $usuario['nome']; ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- deu errado -->
            <li>Nenhum usuário encontrado.</li>
        <?php endif; ?>
        <ul>
            <hr>
            <form method="POST">
                <input type="text" placeholder="Digite um nome..." name="nome">
                <button>Enviar</button>
            </form>
        </ul>
    </ul>
</body>

</html>
