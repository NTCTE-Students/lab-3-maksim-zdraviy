<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $numes = [
                ["<b>Имя</b>", "<b>Позиция</b>"],
                ["Роналдо", "НАП"],
                ["Месси", "нету"]
            ];

            foreach ($numes as $row) {
                print("<tr>");
                foreach ($row as $square) {
                    print("<td>{$square}</td>");
                }
                print("</tr>");
            }
            echo "</table>";
        ?>
    </table>
</body>
</html>