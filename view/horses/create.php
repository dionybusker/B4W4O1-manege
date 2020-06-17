<div class="container">
    <h2>Paard toevoegen</h2>

    <form class="my-2 p-0" action="<?php echo URL ?>horses/store" method="POST">
        <label class="col-5">Naam</label>
        <input class="col-5" type="text" name="name" required>

        <label class="col-5" for="breed">Ras *</label>
        <select class="col-5" name="breed" id="breed">
            <?php foreach ($breeds as $breed) { ?>
                <option value="<?php echo $breed["id"] ?>"><?php echo $breed["breed"].' - '.$breed["kind"] ?></option>
            <?php } ?>
        </select>

        <label class="col-5">Leeftijd</label>
        <input class="col-5" type="text" name="age" required>

        <label class="col-5">Schofthoogte in cm</label>
        <input class="col-5" type="text" name="height" required>

        <label class="col-5">Geschikt voor springsport? (ja/nee)</label>
        <input class="col-5" type="text" name="showjumping" required>

        <input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" value="Voeg toe!">
    </form>

    <p class="col-12"><span class="font-weight-bold">*</span> Op de vraag wat het verschil tussen een paard en een pony precies maakt is het antwoord van de manegehouder: <br>
    "<span class="font-italic">Of een dier een paard of pony is, is bij onze manege afhankelijk van de gemiddelde volwassen schofthoogte die hoort bij het ras waartoe het dier behoort. Tot 147,5 cm gaat het om een pony ras. Ik weet dat dit door ruiters die zich bezighouden met de springsport per individueel dier wordt bekeken, maar dat is voor het fokken simpelweg niet praktisch. Er bestaat een lijst waarop per ras de gemiddelde schofthoogte staat vermeld.</span>"
    </p>
</div>