<?php
// Aldagaiak
$hostDB = 'db';
$nombreDB = 'taldeak';
$usuarioDB = 'AimarZa';
$contrasenyaDB = 'admin1234';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// SELECT prestatu
$miConsulta = $miPDO->prepare('SELECT * FROM taldeak;');
// Kontsulta exekutatu
$miConsulta->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leer - CRUD PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table td {
            border: 1px solid orange;
            text-align: center;
            padding: 1.3rem;
        }
        .button {
            border-radius: .5rem;
            color: white;
            background-color: orange;
            padding: 1rem;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Kodea</th>
            <th>Izena</th>
            <th>Irabazi</th>
            <th>Berdindu</th>
            <td>Galdu</td>
        </tr>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
        <tr>
           <td><?= $valor['kodea']; ?></td>
           <td><?= $valor['izena']; ?></td>
           <td><?= $valor['irabazi']; ?></td>
           <td><?= $valor['berdindu']; ?></td>
            <td><?= $valor['galdu']; ?></td>
           <!-- Aurrerago erabiliko da eliminatzeko edo aldatzeko erregistroa -->

        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
