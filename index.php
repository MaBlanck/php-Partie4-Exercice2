<?php
function returnstring($type = 'Hello You')
{
    return $type;
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Exercice 2 Partie 4</title>
</head>

<body>
    <h1>Exercice 2 Partie 4</h1>
    <p><?php
        echo returnstring();
    ?></p>
</body>

</html>