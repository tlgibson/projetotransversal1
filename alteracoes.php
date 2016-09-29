<?php
    public function inserir_processo($nome, $matricula, $email)
    {
        $stmt = $this->conn->prepare('INSERT INTO aluno (nome, matricula, email) VALUES (:nome, :matricula, :email)');
        // Higienizado automaticamente pela PDO
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':matricula', $matricula);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    }
    public function editar_processo($processo)
    {
        $stmt = $this->conn->prepare('UPDATE INTO processos (processo) VALUES (:processo)');
        // Higienizado automaticamente pela PDO
        $stmt->bindValue(':processo', $processo);
        $stmt->execute();
    }
    public function deletar_processo($processo)
    {
        $stmt = $this->conn->prepare('DELETE INTO processos (processo) VALUES (:processo)');
        // Higienizado automaticamente pela PDO
        $stmt->bindValue(':processo', $processo);
        $stmt->execute();
    }

?>
