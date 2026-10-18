
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
    $days = array(
        "Sunday", "Monday", "Tuesday",
        "Wednesday", "Thursday", "Friday",
        "Saturday"
    );

    echo "The days of the week in English are:<br>";
    echo implode(", ", $days) . ".<br><br>";

    $days = array(
        "Dimanche", "Lundi", "Mardi",
        "Mercredi", "Jeudi", "Vendredi",
        "Samedi"
    );

    echo "The days of the week in French are:<br>";
    echo implode(", ", $days) . ".";
    ?>
</body>
</html>
