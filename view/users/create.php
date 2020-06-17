<div class="container">
    <h2>Registreren</h2>

    <form class="my-2 p-0" action="<?php echo URL ?>users/store" method="POST">
        <label class="col-5">Naam</label>
        <input class="col-5" type="text" name="name" required>

        <label class="col-5">Volledige naam</label>
        <input class="col-5" type="text" name="fullname" required>

        <label class="col-5">Adres</label>
        <input class="col-5" type="text" name="address" required>

        <label class="col-5">Telefoonnummer</label>
        <input class="col-5" type="text" name="phone" required>

        <input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" value="Registreren!">


    </form>
</div>
