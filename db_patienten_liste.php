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
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Straße</th>
            <th>Ort</th>
            <th>Telefon</th>
            <th>Email</th>
        </tr>

        <?php

            include 'db_connect.php';

            if ($conn) {

                $sql = "SELECT * FROM kunden";
                $result = mysqli_query($conn, $sql);

                if($result)  {
                    while ($row = mysqli_fetch_assoc($result)) {
                        extract($row);

                        echo '<tr>';
                        echo '<td>' . $kunden_vname . '</td>';
                        echo '<td>' . $kunden_nname . '</td>';
                        echo '<td>' . $kunden_addresse . '</td>';
                        echo '<td>' . $kunden_ort . '</td>';
                        echo '<td>' . $kunden_tel . '</td>';
                        echo '<td>' . $kunden_email . '</td>';
                        echo '<tr>';
                    }
                }
            }

        ?>


    </table>
</body>
</html>
