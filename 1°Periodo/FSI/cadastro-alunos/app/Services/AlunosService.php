<?php
class AlunosService
{
    public function criar(array $dados): array
    {
        //Limpar e validar os dados de entrada
        $nome = trim($dados['nome'] ?? '');
        $email = trim($dados['email'] ?? '');
        $curso = trim($dados['curso'] ?? '');

        if ($nome === '') {
            return ['erro' => 'O nome é obrigatório.'];
        }
        
        if (strlen($nome) < 3) {
            return ['erro' => 'O nome deve ter pelo menos 3
        caracteres.'];
        }
        
        if ($email === '') {
            return ['erro' => 'O e-mail é obrigatório.'];
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['erro' => 'O e-mail informado é inválido.'];
        }
        
        if ($curso === '') {
            return ['erro' => 'O curso é obrigatório.'];
        }
        //Chamada do repository para salvar os dados
        $repository = new AlunosRepository();
        $repository->salvar([
            'nome' => $nome,
            'email' => $email,
            'curso' => $curso
        ]);
        return ['sucesso' => 'Aluno salvo com sucesso.'];
    }
}