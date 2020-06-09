<h2>Paard toevoegen</h2>

<form class="col-12" action="<?php echo URL ?>horses/store" method="POST">
    <label class="col-5" for="name">Naam</label>
    <input class="col-5" type="text" name="name">

    <label class="col-5" for="breed">Ras</label>
    <input class="col-5" type="text" name="breed">

    <label class="col-5" for="age">Leeftijd</label>
    <input class="col-5" type="text" name="age">

    <label class="col-5" for="height">Schofthoogte in cm</label>
    <input class="col-5" type="text" name="height">

    <label class="col-5" for="showjumping">Geschikt voor springsport? (ja/nee)</label>
    <input class="col-5" type="text" name="showjumping">

    <input class="col-5" type="submit" value="Voeg toe!">


</form>