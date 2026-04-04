<?php require_once __DIR__  . '/../Back-End/listagemBack.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <style>
        h1{text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; }

        .btn-deletar{
            background-color: red;
            color: white;
            border: 1px solid black;
            border-radius: 5px;
        }

        .btn-deletar:hover{
            transition-duration: .5s;
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <h1>Listagem dos Pets</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome do animal</th>
                <th>Especie</th>
                <th>Idade</th>
                <th>Nome do tutor</th>
                <th>Email tutor</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["nome"] . "</td>";
                            echo "<td>" . $row["especie"] . "</td>";
                            echo "<td>" . $row["idade"] . "</td>";
                            echo "<td>" . $row["nomeTutor"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td><a href = '../Back-end/deletar.php?id=" . $row["id"] ."'> <button class='btn-deletar'> 🗑️ </button></a></td>";
                        echo '</tr>';
                    }
                ?>
        </tbody>
    </table>
</body>
</html>