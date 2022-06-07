<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, td {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <pre>
        app tạo table html
    </pre>

    <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
    </table>
    <?php
    $col = 8;
    $row = 20;
    // trong mỗi td in ra : hàng 1 cột 1 | hàng 1 cột 2

    echo "<h1>table</h1>";
    echo "<table>";
        for($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            for($j = 1; $j <= $col; $j++) {
                echo "<td>Hàng $i cột $j</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
    ?>


</body>
</html>