# 🗳️ Sistema de Urna Eletrônica

Aplicação web que simula uma urna eletrônica, permitindo a identificação do eleitor, escolha de candidatos ou voto em branco, e o registro dos dados em banco de dados.

---

## 🌐 Demonstração Online

Acesse o sistema funcionando diretamente pelo navegador:

👉 **[Acessar o Sistema de Votação ao Vivo](urnavotacao.42web.io)**

---

## ✨ Funcionalidades

* **Identificação do Eleitor:** Formulário de entrada com Nome Completo, Título de Eleitor e CPF.
* **Bloqueio de Duplicidade:** Configuração no banco de dados (`UNIQUE`) que impede que o mesmo CPF ou Título registre mais de um voto.
* **Votação Assíncrona:** Envio dos votos em segundo plano usando JavaScript (`Fetch API`) sem recarregar a página, exibindo um modal de confirmação.

---

## 🛠️ Tecnologias Utilizadas

* **Front-end:** HTML5, CSS3 e JavaScript.
* **Back-end:** PHP.
* **Banco de Dados:** MySQL (gerenciado via phpMyAdmin).

---

## 📁 Estrutura de Arquivos

* `index.php` / `entrada.php` — Tela inicial de identificação do eleitor.
* `votacao.php` — Interface principal da urna com os candidatos e modal de confirmação.
* `salvarvoto.php` — Script responsável por receber os dados via POST e gravar no banco de dados.
* `eleitor.sql` — Arquivo de estrutura do banco de dados e tabela `votacao`.
* `*.css` e `*.js` — Arquivos de estilização e lógica de interação.

---

## 💻 Execução Local (Opcional)

Caso queira rodar localmente via XAMPP: mova os arquivos para a pasta `htdocs`, importe o arquivo `eleitor.sql` em um banco chamado `eleitor` no **phpMyAdmin** e ajuste os dados de conexão no arquivo `salvarvoto.php`.
