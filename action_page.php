<?php
$a = array ("Rauf", "Azfar", "Ayoub" );
echo '<table border="1" width="200">';
foreach($a as $name)
{echo "<tr><td>$name</td><td>Rotterdam</td></tr>";
}
echo "</table>" . "<br>"; 

$a = array("Rauf", "Azfar", "Ayoub" );


echo '<table border="1" width="200">';

for ($i=0; $i < count($a); $i++)

 { echo "<tr><td>{$a[$i]}</td><td>Rotterdam</td></tr>";}
echo "</table>";


echo date("") . "<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";
echo "<p>hello world</p> <br>";
$username = $_POST['username'];
$password = $_POST['password'];
echo "Username: $username<br>";
echo "Password: $password";
?>
