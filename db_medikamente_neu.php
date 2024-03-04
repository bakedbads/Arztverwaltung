<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Medikament Nu</title>
</head>
<body>
    <?php include 'arzt_menu.php'; ?>
    <h2>Neues Medikament Erfassen</h2>
    <form method="post" action="db_medikamente_input.php">
        <label for="medi-name">Name</label>
        <input type="text" id="medi-name" name="medi-name" required="">
        <br>
        <label for="medi_einnahme">Einnahme</label>
        <input type="text" id="medi_einnahme" name="medi_einnahme" required="">
        <br>
        <label for="medi_preis">Preis</label>
        <input type="text" id="medi_preis" name="medi_preis" required="">
        <br>
        <label for="medi_beschreibung">Beschreibung</label>
        <input type="text" id="medi_beschreibung" name="medi_beschreibung" required="">
        <button type="submit" name="submit" id="submit" value="Neuen Patienten erfassen">Neues Medikament erfassen</button>
    </form>
</body>
</html>