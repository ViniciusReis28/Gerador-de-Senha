<?php
function gerarSenha($tamanho = 12) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $senha = '';
    $max = strlen($caracteres) - 1;

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $max)];
    }

    return $senha;
}

$tamanho = isset($_POST['tamanho']) ? intval($_POST['tamanho']) : 12;
$senhaGerada = gerarSenha($tamanho);
?>





<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="logo" src="logo-vinin-projects.png">
    <div class="container">
    <h2>Gerador de Senhas Aleatórias</h2>

    <form method="POST">
        <label for="tamanho">Tamanho da senha:</label>
        <br>
        <input type="number" class="input_number" name="tamanho" id="tamanho" value="<?= $tamanho ?>" min="6" max="20">
        <br>
        <br>
        <button type="submit" class="glow-on-hover">GERAR SENHA</button>
        <br>
        <br>

    </form>

    <h3>Sua senha:</h3>
    <p class="verde"><strong><?= $senhaGerada ?></strong></p>
    </div>
    <button class="toggle-button" onclick="toggleDarkMode()">🌙</button>
    
<script src="script.js"></script>
</body>
</html>
