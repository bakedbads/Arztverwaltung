User
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Patient Nu</title>
</head>
<body>
    <?php include 'arzt_menu.php'; ?>
    <h2>Neuen Patienten Erfassen</h2>
    <form method="post" action="db_patient_input.php">
        <label for="kunden_vname">Vorname</label>
        <input type="text" id="kunden_vname" name="kunden_vname" required="">
        <br>
        <label for="kunden_nname">Nachname</label>
        <input type="text" id="kunden_nname" name="kunden_nname" required="">
        <br>
        <label for="kunden_addresse">Straße</label>
        <input type="text" id="kunden_addresse" name="kunden_addresse" required="">
        <br>
        <label for="kunden_ort">Ort</label>
        <input type="text" id="kunden_ort" name="kunden_ort" required="">
        <br>
        <label for="kunden_tel">Telefon</label>
        <input type="text" id="kunden_tel" name="kunden_tel" required="">
        <br>
        <label for="kunden_email">Email</label>
        <input type="text" id="kunden_email" name="kunden_email" required="">
        <br>
        <button type="submit" name="submit" id="submit" value="Neuen Patienten erfassen">Neuen Patienten erfassen</button>
    </form>
</body>
</html>
