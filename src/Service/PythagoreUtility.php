<?php
namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1" cellspacing="0">';
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            for ($j = 1; $j <= 10; $j++) {
                $html .= '<td>' . ($i * $j) . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        
        return $html;
    }
}
