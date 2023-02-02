<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subpagina 30-1-2023</title>
</head>
<body>
<nav style="background-color: crimson; width: 100vw; height: 10vh;">
<ul> 
 <li>
    <a href="index.html">home</a>
 </li>
</ul>
</nav>
<h1>Subpagina</h1>
<br>
<?php
    echo date("l") . "<br>";
    echo date("l jS \of F Y h:i:s A");
    ?>

    <form action="action_page.php"  method="POST">
        <br>
        <label for="vn">Voornaam:</label> <br>
        <input type="text" id="vn" name="voornaam" value="Rauf"> <br>
        <label for="pw">Password:</label> <br>
        <input type="password" id="pw" name="password" value="Gelukt"> <br> <br>
        <input type="submit" value="Click.">
    </form>

        <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
<?php
 