<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/main.css"/>
    <script src="<?=ROOT?>/assets/js/main.js"></script>
    <title>Document</title>
    <script>
        const traducao = <?= json_encode($traduzir, JSON_UNESCAPED_UNICODE) ?>;
        const filmes = <?= json_encode($dados) ?>;
        const personagens = <?= json_encode($personagem) ?>;
    </script>
</head>
<body>
    <div class="main">
    <a href="<?=ROOT?>/dados" class="top-link">Dados</a>

        <div class="header">
            <img class="logo" src="<?=ROOT?>/assets/images/logo.png" alt="Logo"/>
            
            <h1>StarWars</h1>
        </div>

        <div class="films-list" id="films-list"></div>
        <div class="modal" id="modal" onclick="hideModal(event)"> 
            
            <div class="modal-content" id="modal-content">
                
            </div>
        </div>
    </div>
</body>
</html>