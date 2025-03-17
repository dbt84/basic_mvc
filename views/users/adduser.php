<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <p><?php echo $melding ?></p>
    <h1>Gebruikerslijst</h1>
    <form action="" method="POST">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
