<?php
function trouverMax($tableau) {
    if (empty($tableau)) {
        return null; // Retourne null si le tableau est vide
    }

    $max = $tableau[0]; // Initialiser le premier élément comme le maximum

    foreach ($tableau as $element) {
        if ($element > $max) {
            $max = $element; // Met à jour le maximum si un élément plus grand est trouvé
        }
    }

    return $max;
}

// Exemple d'utilisation
$monTableau = [3, 7, 2, 9, 5];
echo "Le plus grand nombre est : " . trouverMax($monTableau);
?>
