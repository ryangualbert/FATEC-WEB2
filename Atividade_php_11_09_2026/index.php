<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
</head>

<body>
    <h1>Dados do Cliente</h1>

    <!-- Formulário para entrada dos dados -->
    <form method="POST">
        <!-- Campo para informar o nome -->
        <label>Nome:</label><br>
        <input name="name" required>

        <!-- Campo para informar o e-mail -->
        <br/>
        <br/>
        <label>E-mail:</label><br>
        <input type="email" name="email" required>

        <!-- Campo para informar o telefone -->
        <br/>
        <br/>
        <label>Telefone:</label><br>
        <input name="telefone" required>

        <br><br>

        <!-- Botão para enviar o formulário -->
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o e-mail enviado pelo formulário
        $email = $_POST["email"];

        // Mostra o e-mail recebido
        echo "E-mail recebido: " . $email;
    }

    ?>

</body>

</html>