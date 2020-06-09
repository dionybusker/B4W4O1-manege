<h1>Paard gegevens verwijderen</h1>
<p>Gegevens van <?php echo $horse["name"] ?> verwijderen.</p>
<a class="btn btn-danger" href="<?php echo URL ?>horses/destroy/<?php echo $horse["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijder!</a>
