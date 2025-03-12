<?php
    // filepath: c:\Users\Dev\Workspaces\PHP\apostilas_notebooks\curso_php\result.php

    // Dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    try {
        // Conexão com o banco de dados
        $pdo = new PDO('mysql:host=localhost;dbname=cadastro', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL para inserir um novo registro na tabela Usuario
        $sql = "INSERT INTO Usuario (nome, email, profissao) VALUES (:nome, :email, :profissao)";

        // Preparar a declaração
        $stmt = $pdo->prepare($sql);

        // Vincular os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':profissao', $profissao);

        // Executar a declaração
        $stmt->execute();

        echo "Registro inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
?>