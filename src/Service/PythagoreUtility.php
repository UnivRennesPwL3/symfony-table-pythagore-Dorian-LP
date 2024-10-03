<?php
namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $table = "<table border=\"1\" border-collapse=\"collapse\">\n";
        $table .= "<tr><th>&nbsp;</th>";

        // Première ligne d'en-tête avec les nombres de 0 à 10
        for ($i = 0; $i <= 10; $i++) {
            $table .= "<th>$i</th>";
        }
        $table .= "</tr>\n";

        // Boucle pour les lignes de la table (de 0 à 10)
        for ($i = 0; $i <= 10; $i++) {
            $table .= "<tr>";
            $table .= "<th>$i</th>";  // En-tête de ligne

            // Boucle pour les colonnes de la table (de 0 à 10)
            for ($j = 0; $j <= 10; $j++) {
                if ($i === $j) {
                    $table .= "<td>X</td>";  // Si i == j, on affiche 'X'
                } else {
                    $table .= "<td>" . ($i * $j) . "</td>";  // Sinon, on affiche le produit i * j
                }
            }
            $table .= "</tr>\n";
        }

        $table .= "</table>\n";
        return $table;
    }
}
