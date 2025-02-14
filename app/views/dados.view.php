<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs do Banco</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 40px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #374151;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #ffffff;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #d1d5db;
        }
        th {
            background-color: #1f2937;
            color: #f9fafb;
        }
        tr:nth-child(even) {
            background-color: #f3f4f6;
        }
        tr:hover {
            background-color: #e5e7eb;
        }
    </style>
</head>
<body>
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
