<?php
$melding = "";
if(isset($_POST['name'])) {
    $userModel = new User();
    $userModel->addUser($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Gebruikerslijst</h1>
    <form action="" method="POST">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
