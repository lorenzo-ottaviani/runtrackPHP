<?php
$entier = 28;
$reel = 4.25;
$chaine_de_caracteres = "cracracra";
$booleen = true;

echo "<table border='1'>";

echo "<thead>";
echo "<tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>";
echo "</thead>";

echo "<tbody>";

echo "<tr>
        <th>int</th>
        <th>entier</th>
        <th>{$entier}</th>
    </tr>";

echo "<tr>
        <th>float</th>
        <th>reel</th>
        <th>{$reel}</th>
    </tr>";

echo "<tr>
        <th>str</th>
        <th>chaine_de_caracteres</th>
        <th>{$chaine_de_caracteres}</th>
    </tr>";

echo "<tr>
        <th>bool</th>
        <th>booleen</th>
        <th>{$booleen}</th>
    </tr>";    

echo "</tbody>";

echo "</table>"
?>