<?php
$rock_paper_scissors =explode("\n",str_replace(' ','',file_get_contents("day2_rock_paper_scissors.txt")));
// $rock_paper_scissors =explode("\n",str_replace(' ','',file_get_contents("rockpaperscissors.txt")));

// $schema = array(1 => 'BX', 2 => 'CY', 3 => 'AZ', 4 => 'AX', 5 => 'BY', 6 => 'CZ', 7 => 'CX', 8 => 'AY', 9 => 'BZ');
$schema2 = array(1 => 'BX', 6 => 'CY', 8 => 'AZ', 3 => 'AX', 5 => 'BY', 7 => 'CZ', 2 => 'CX', 4 => 'AY', 9 => 'BZ');
$score_rock_paper_scissors = [];
for ($i=0; $i <= count($rock_paper_scissors)-1; $i++){
    $score_rock_paper_scissors[] = str_replace(array_values($schema2), array_keys($schema2), $rock_paper_scissors[$i]);
}
print_r(array_sum($score_rock_paper_scissors));
?>