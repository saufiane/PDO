<?php
// chemin pour appeler les données de la table client
$pdo = new PDO('sqlite:test.db');

// pour appeler les données de la table de programme
$query = $pdo->query('SELECT * FROM clients');
if ($query === false) {
    var_dump($pdo->errorInfo());
    die('Erreur sql');
    }

// recuperer les données de la base
$clients = $query->fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
print_r($clients);
var_dump($clients);
echo"</pre>";
foreach ($clients as $value) {

    print_r($value);
}

?>

