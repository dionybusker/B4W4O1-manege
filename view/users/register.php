<?php
    //$generateCode = generateCode();
?>

<h2>Registreren</h2>

<form action="" method="POST">
    <label for="username">Gebruikersnaam</label>
    <input type="text" name="username">

    <label for="fullname">Volledige naam</label>
    <input type="text" name="fullname">

    <label for="address">Adres</label>
    <input type="text" name="address">

    <label for="phone">Telefoonnummer</label>
    <input type="text" name="phone">

    <input type="text" name="identify" value="<?= $generateCode ?>">

    <input type="submit">


</form>