<?php 
function table($i, $j)
{
    $table = '<table border="2">';
    for ($a=1; $a <= $i; $a++) {
        $table .= '<tr>';
        for ($b=1; $b <= $j ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
 
echo table(12, 12);
?>