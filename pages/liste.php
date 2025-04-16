<h1>Liste de contacts</h1>
<ul>
    <?php

    $requeteContacts = $bd->query(
        "SELECT id, CONCAT(prenom, ' ', nom) AS nom_complet FROM contacts ORDER BY nom_complet"
    );
    foreach ($requeteContacts as $contact) {
        echo "<li><a href=\"?page=afficher&id={$contact['id']}\">{$contact['nom_complet']}</a></li>";
    }

    ?>
</ul>
