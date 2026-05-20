<?php
class Database
{
    public static function conectar(): PDO
    {
        // Configurações de conexão com o banco de dados
        $host = 'localhost';
        $dbname = 'cadastro_alunos';
        $usuario = 'root';
        $senha = '';

        // Tenta estabelecer a conexão com o banco de dados
        try {
            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                $usuario,
                $senha
            );
        
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
            
        } 
        // Configura o modo de erro do PDO para lançar exceções
        catch (PDOException $e) {
            die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }
}