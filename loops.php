<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops PHP</title>
</head>
<body>
    <?php
    $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

    foreach ($pronouns as $pronoun) {
        if ($pronoun == 'He/She') {
            echo $pronoun . ' codes';
        } else {
            echo $pronoun . ' code';
        }
        echo "<br>";
        
    }
    echo "<br>";
    //Print numbers from 1 to 120 using a while loop
    echo "1=>120 while loop<br>";
    $num = 1;
    while ($num <= 120) {
        echo $num . "<br>";
        $num++;
    }
    //Print numbers from 1 to 120 using a for loop:
    echo "1=>120 for loop<br>";  
    for ($num = 1; $num <= 120; $num++) {
        echo $num . "<br>";
    }
    //   Create an array with startup members' first names and display them using a loop: 
    echo "my start-up names<br>";
    $firstNames = array("Willy", "Delphine", "Ismael", "Thomas");

    foreach ($firstNames as $firstName) {
        echo $firstName . "<br>";
    }
    echo "<br>";
    //Create an array with country names and generate an HTML select box using a loop:
    echo "country names 2 methods<br>";
    $countries = array("Belgium", "France", "Germany", "Italy", "Spain", "United Kingdom", "United States", "Canada", "Australia", "Japan");

    echo "<select>";
    foreach ($countries as $country) {
        echo "<option>" . $country . "</option>";
    }
    echo "</select>";
    //Convert the array into an associative array with country ISO codes as keys and country names as values, and update the HTML select box to use the ISO codes as option values:
    $countries = array(
        'BE' => 'Belgium',
        'FR' => 'France',
        'DE' => 'Germany',
        'IT' => 'Italy',
        'ES' => 'Spain',
        'UK' => 'United Kingdom',
        'US' => 'United States',
        'CA' => 'Canada',
        'AU' => 'Australia',
        'JP' => 'Japan'
    );
    
    echo "<select>";
    foreach ($countries as $isoCode => $country) {
        echo "<option value=\"" . $isoCode . "\">" . $country . "</option>";
    }
    echo "</select>";
    

    
    ?>
</body>
</html>