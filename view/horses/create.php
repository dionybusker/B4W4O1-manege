<h2>Paard toevoegen</h2>

<form class="col-12" action="<?php echo URL ?>horses/store" method="POST">
    <label class="col-5" for="name">Naam</label>
    <input class="col-5" type="text" name="name" required>

    <label class="col-5" for="breed">Ras *</label>
    <select class="col-5" name="breed" id="breed">
        <?php foreach ($breeds as $breed) { ?>
            <option value="<?php echo $breed["id"] ?>"><?php echo $breed["breed"].' - '.$breed["kind"] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="col-5" type="text" name="breed"> -->

    <label class="col-5" for="age">Leeftijd</label>
    <input class="col-5" type="text" name="age" required>

    <label class="col-5" for="height">Schofthoogte in cm</label>
    <input class="col-5" type="text" name="height" required>

    <label class="col-5" for="showjumping">Geschikt voor springsport? (ja/nee)</label>
    <input class="col-5" type="text" name="showjumping" required>

    <input class="col-5" type="submit" value="Voeg toe!">
</form>

<p class="col-12"><span class="font-weight-bold">*</span> Op de vraag wat het verschil tussen een paard en een pony precies maakt is het antwoord van de manegehouder: <br>
"<span class="font-italic">Of een dier een paard of pony is, is bij onze manege afhankelijk van de gemiddelde volwassen schofthoogte die hoort bij het ras waartoe het dier behoort. Tot 147,5 cm gaat het om een pony ras. Ik weet dat dit door ruiters die zich bezighouden met de springsport per individueel dier wordt bekeken, maar dat is voor het fokken simpelweg niet praktisch. Er bestaat een lijst waarop per ras de gemiddelde schofthoogte staat vermeld.</span>"
</p>