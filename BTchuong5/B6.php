<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 200px;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }     
    </style>
</head>
<body>
<table>
    <tr>
        <th>Số n</th>
        <th>Số n²</th>
    </tr>

    <?php
        for ($i = 0; $i <= 50; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . ($i * $i) . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>