<?php
    $nome   = $_POST['nome'] ?? '';
    $titulo = $_POST['titulo'] ?? '';
    $cpf    = $_POST['cpf'] ?? '';
?>
<script>
    const eleitorNome   = "<?php echo $nome; ?>";
    const eleitorTitulo = "<?php echo $titulo; ?>";
    const eleitorCPF    = "<?php echo $cpf; ?>";
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="votacao.css">
    <title>Votação</title>
</head>
<body>
    <div class="banner">
        <h1>SISTEMA ELEITORAL</h1>
        <?php
        if (isset($_POST["nome"])) {
            echo "<div class='nome'>" . $_POST["nome"] . "</div>";
        }
        ?>
    </div>

    <h1 class="candvoto1">CANDIDATO A</h1>

    <div id="cand1" class="voto1">
        <img src="img/imgcand.jpg" alt="Foto Candidato">
        <h1>CANDIDATO A</h1>
        <h2>PARTIDO A</h2>
        <button onclick="candidatovotado('Candidato A','cand1')" type="button" name="voto1">VOTAR</button>
    </div>

    <h1 class="candvoto2">CANDIDATO B</h1>

    <div id="cand2" class="voto2">
        <img src="img/imgcand.jpg" alt="Foto Candidato">
        <h1>CANDIDATO B</h1>
        <h2>PARTIDO B</h2>
        <button onclick="candidatovotado('Candidato B','cand2')" type="button" name="voto2">VOTAR</button>
    </div>
    
    <div id="nulo">
    <button onclick="candidatovotado('Branco', 'nulo')" class="branco" name="branco">BRANCO/NULO</button>
    </div>

    <div id="confirmacao" class="modal">
    <div class="modal-conteudo">
        <img src="img/conf.jpg" alt="Confirmado">
        <h1>VOTO CONFIRMADO!</h1>
        <p id="textoconf">Seu voto foi confirmado!</p>
        <button onclick="voltar()" class="fechar">VOLTAR</button>
    </div>
    </div>
    <script src="votacao.js"></script>
</body>
</html>