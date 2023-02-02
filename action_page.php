<html>
<?php

    echo $_GET['voornaam'];
    $username = $_GET['voornaam'];
    /* Print username. */

    echo "<br>";

    echo $_GET['password'];
    $password = $_GET['password'];
    /* Print password. */

    if ($username < 8) {
        echo "error";
    }

?>

</html>