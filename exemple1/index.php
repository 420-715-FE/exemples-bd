<?php

require_once('connexionBD.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de contacts</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page) {
    default:
        include('pages/liste.php');
}

?>
</body>
</html>
