<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Arztpraxis</title>
</head>
<body>
    <?php include 'arzt_menu.php'; ?>
    <h2>Arztpraxis - Patienten</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Einnahme</th>
            <th>Preis</th>
            <th>Beschreibung</th>
        </tr>

        <?php

            include 'db_connect.php';

            if ($conn) {

                $sql = "SELECT * FROM medikamente_daten";
                $result = mysqli_query($conn, $sql);

                if($result)  {
                    while ($row = mysqli_fetch_assoc($result)) {
                        extract($row);

                        echo '<tr>';
                        echo '<td>' . $medi_name . '</td>';
                        echo '<td>' . $medi_einnahme . '</td>';
                        echo '<td>' . $medi_preis . '</td>';
                        echo '<td>' . $medi_beschreibung . '</td>';
                        echo '<tr>';

                    }
                }
            }

        ?>


    </table>
</body>
</html>
