<?php
    include 'arzt_menu.php';
    if (isset($_POST['submit'])) {
        extract($_POST);

        include 'db_connect.php';

        if($conn) {
            $sql = "INSERT INTO medikamente_daten
            (medi_name, 
            medi_einnahme, 
            medi_preis, 
            medi_beschreibung) VALUES (
                '$medi_name',
                '$medi_einnahme',
                '$medi_preis',
                '$medi_beschreibung')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: db_medikamente_choice.php");
                exit();
            } else {
                echo "FEHLER: " . mysqli_error($conn);
            }
        }
    }
?>
