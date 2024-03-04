<?php
    include 'arzt_menu.php';
    if (isset($_POST['submit'])) {
        extract($_POST);

        include 'db_connect.php';

        if($conn) {
            $sql = "INSERT INTO kunden
            (kunden_vname, 
            kunden_nname, 
            kunden_tel, 
            kunden_email, 
            kunden_addresse) VALUES (
                '$kunden_vname',
                '$kunden_nname',
                '$kunden_tel',
                '$kunden_email',
                '$kunden_addresse')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: db_patienten_choice.php");
                exit();
            } else {
                echo "FEHLER: " . mysqli_error($conn);
            }
        }
    }
?>
