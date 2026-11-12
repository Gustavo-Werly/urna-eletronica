<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="entrada.css">
    <title>Identificação do Eleitor</title>
</head>
<body>
    <div class="caixaform">
        <h1>IDENTIFICAÇÃO DO ELEITOR</h1>

        <form action="votacao.php" method="POST">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
        <label for="titulo">Título de Eleitor:</label><br>
        <input type="number" id="titulo" name="titulo" placeholder="0000 0000 0000" required>
        <label for="cpf">CPF:</label><br>
        <input type="number" id="cpf" name="cpf" placeholder="000.000.000-00" required>
        <button type="submit" value="entrar" id="ent">ENTRAR PARA VOTAR</button>
        </form>
    </div>
</body>
</html>