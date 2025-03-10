<?php
    // função de conexão com o banco de dados via PDO
    function conexao() {
        return new PDO('mysql:host=localhost;dbname=cadastro', 'root', 'root');
    }

    // função que insere um registro
    function inserirUsuario($nome, $email, $profissao) {
        // Prepara a declaração SQL com parâmetros
        $stmt = $conn->prepare("INSERT INTO Usuario (nome, email, profissao) VALUES (:nome, :email, :profissao)");

        // Vincula os parâmetros aos valores
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':profissao', $profissao);

        // Define os valores e executa a declaração
        // REVIEW: verificar como repassar os valores do usuário
        // $nome = "João Silva";
        // $email = "joao.silva@example.com";
        // $profissao = "Engenheiro";
        $stmt->execute();

        echo "Novo registro criado com sucesso";
    }
?>