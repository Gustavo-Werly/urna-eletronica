function candidatovotado(candidato, iddocand) {

    let dados = new FormData();
    dados.append('nome', eleitorNome);
    dados.append('titulo', eleitorTitulo);
    dados.append('cpf', eleitorCPF);
    dados.append('candidatovotado', candidato);

    fetch('salvarvoto.php', { method: 'POST', body: dados });

    if (iddocand !== 'nulo') {
    let candAtual = document.getElementById(iddocand);
    candAtual.classList.add('bordaativa');
    }

    let textocand = document.getElementById('textoconf');
    textocand.innerText = "Seu voto no " + candidato + " foi confirmado com sucesso!";

    let modal = document.getElementById('confirmacao');
    modal.style.display = "block";
}

function voltar() {
    window.location.href="entrada.php";
}

