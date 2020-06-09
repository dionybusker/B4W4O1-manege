<h2>Registreren</h2>

<form class="col-12" action="<?php echo URL ?>users/store" method="POST">
    <label class="col-5" for="name">Naam</label>
    <input class="col-5" type="text" name="name">

    <label class="col-5" for="fullname">Volledige naam</label>
    <input class="col-5" type="text" name="fullname">

    <label class="col-5" for="address">Adres</label>
    <input class="col-5" type="text" name="address">

    <label class="col-5" for="phone">Telefoonnummer</label>
    <input class="col-5" type="text" name="phone">

    <input class="col-5" type="submit" value="Registreren!">


</form>