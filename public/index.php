
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music library</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<?php
/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// voorbeeld met het ophalen van alle data en dan de titel weer te geven
$connection = new mysqli('mariadb', 'db_user', 'mijn_p@ss#', 'BO_opdracht');
$sql = 'SELECT * FROM tests ORDER BY title';

$result = $connection->query($sql);

while ($item = $result->fetch_assoc()) {
    echo '<h2>' . $item['Title'] . '</h2>';
    echo '<img src="'. $item['Img'] .'">';
    echo '<p>'. $item['Content'] .'</p>';
}
?>

</body>
</html>
