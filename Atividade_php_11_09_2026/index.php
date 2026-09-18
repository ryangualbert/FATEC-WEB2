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
        // Recebe os dados enviado pelo formulário
        $name = $_POST["name"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        // Obtém a conexão configurada no Render
        $databaseUrl = getenv("DATABASE_URL");

        // Conecta ao PostgreSQL
        $conexao = pg_connect($databaseUrl);

        // Salva os dados no banco
        pg_query_params(
            $conexao,
            "INSERT INTO usuarios(name, email, telefone) VALUES ($1, $2, $3)",
            [$name, $email, $telefone]

        );

        // Mostra os dados para o Front-end recebido
        echo "Nome do usuário: " . $name;
        echo "E-mail recebido: " . $email;
        echo "Telefone do usuário: " . $telefone;
    }

    ?>

</body>

</html>