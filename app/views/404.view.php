<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        h1 {
            color: #e74c3c;
            font-size: 2rem;
        }
        p {
            font-size: 1.2rem;
        }
        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 1.2rem;
        }
        a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            h1 {
                font-size: 1.8rem;
            }
            p {
                font-size: 1rem;
            }
            a {
                font-size: 1rem;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 1.5rem;
            }
            p {
                font-size: 0.9rem;
            }
            a {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PÁGINA NÃO ENCONTRADA</h1>
        <p>A página que você está procurando não existe.</p>
        <a href="<?= ROOT ?>/home">Voltar</a>
    </div>
</body>
</html>
