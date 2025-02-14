<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/dados.css"/>
    <title>Logs do Banco</title>
</head>
<body>
<a href="<?=ROOT?>/" class="top-link">Home</a>
    <h1>Logs do Banco</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Log</th>
        <th>Data</th>
    </tr>
    <?php foreach($logs as $log): ?>
    <tr>
        <td><?= $log['id']; ?></td>
        <td><?= $log['solicitacao']; ?></td>
        <td><?= $log['data']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
