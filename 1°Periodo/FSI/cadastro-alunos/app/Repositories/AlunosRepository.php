<?php
class AlunosRepository
{
    public function salvar(array $dados): bool
    {   //Conectar ao banco de dados
        $pdo = Database::conectar();

        //Preparar e executar a query de inserção
        $sql = "INSERT INTO alunos (nome, email, curso) VALUES (:nome, :email, :curso)";
        
        //Usar prepared statements para evitar SQL injection
        $stmt = $pdo->prepare($sql);

        //Passar os dados para a query
        return $stmt->execute([
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
            ':curso' => $dados['curso']
        ]);
    }
}