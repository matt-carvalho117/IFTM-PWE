<?php
require_once '../config/Database.php';
require_once '../app/Repositories/AlunosRepository.php';
require_once '../app/Services/AlunosService.php';

// O controller recebe a requisição enviada pelo formulário
$service = new AlunosService();

// O controller chama o service e entrega os dados recebidos via POST
$resultado = $service->criar($_POST);

// O controller decide qual resposta será enviada ao usuário
$mensagem = $resultado['sucesso'] ?? $resultado['erro'] ?? 'Erro inesperado.';

// Redireciona o usuário para a tela inicial com uma mensagem
header('Location: index.php?msg=' . urlencode($mensagem));
exit;