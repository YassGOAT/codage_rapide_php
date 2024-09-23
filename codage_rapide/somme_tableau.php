<?php
function sommeTableau($tableau) {
    $somme = 0;
    foreach ($tableau as $element) {
        $somme += $element;
    }
    return $somme;
}

// Exemple d'utilisation
$monTableau = [1, 2, 3, 4, 5];
echo "La somme est : " . sommeTableau($monTableau);
?>