<?php
$mensagem = $_GET['msg'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
    <style>
        :root {
            --bg: #eef4fb;
            --card: #ffffff;
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --text: #1f2937;
            --muted: #64748b;
            --border: #d1d5db;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--text);
            background: radial-gradient(circle at top, #f8fbff 0%, #eef4fb 40%, #e2e8f0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .container {
            width: min(520px, 100%);
            background: linear-gradient(180deg, rgba(255,255,255,0.98), #f9fbff 100%);
            border: 1px solid rgba(148,163,184,0.2);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header h1 {
            margin: 0;
            font-size: clamp(1.8rem, 2.4vw, 2.4rem);
            letter-spacing: -0.04em;
        }

        .header p {
            margin: 12px auto 0;
            max-width: 380px;
            color: var(--muted);
            line-height: 1.6;
        }

        form {
            display: grid;
            gap: 15px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #344054;
        }

        input {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 14px 16px;
            font-size: 1rem;
            background: #fff;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: rgba(59, 130, 246, 0.6);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
        }

        .button-group {
            display: grid;
            gap: 14px;
        }

        button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 14px 18px;
            border-radius: 14px;
            border: none;
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            cursor: pointer;
            transition: transform 0.2s ease, filter 0.2s ease;
        }

        button:hover {
            transform: translateY(-1px);
            filter: brightness(1.05);
        }

        .mensagem {
            padding: 15px 18px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 14px;
            color: #1d4ed8;
            text-align: center;
            font-weight: 600;
        }

        @media (max-width: 560px) {
            .container {
                padding: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Cadastro de Alunos</h1>
            <p>Preencha os campos abaixo para adicionar um novo aluno ao sistema. É rápido e seguro.</p>
        </div>

        <?php if ($mensagem !== ''): ?>
            <div class="mensagem">
                <?= htmlspecialchars($mensagem) ?>
            </div>
        <?php endif; ?>

        <form action="salvar.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome completo">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="exemplo@dominio.com">

            <label for="curso">Curso</label>
            <input type="text" name="curso" id="curso" placeholder="Curso do aluno">

            <div class="button-group">
                <button type="submit">Salvar aluno</button>
            </div>
        </form>
    </div>
</body>

</html>