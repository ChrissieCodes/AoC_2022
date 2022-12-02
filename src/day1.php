<?php
#open the file
$calories = file_get_contents('calories.txt');
#initiate variables
$new_sum = 0;
$all_elves = [];
// $elf = 0;
#parse the calorie list
$list_calories = (explode("\r\n", $calories));
#add each element to $new_sum unless it's blank if it's instead compare it to sum, if it's greater than sum, store it in sum
#iterate +1 on elf when blank to know which elf it is. 

for ($i=0; $i <= count($list_calories)-1; $i++) {
echo $list_calories[$i]."\n".$i."\n";
    if ($list_calories[$i]==""){
        array_push($all_elves,$new_sum);
        $new_sum = 0;
    }
    else
    {
        $new_sum+=intval($list_calories[$i]);
    }
    }
    rsort($all_elves);
    $top_three = array_slice($all_elves,0,3);
    print_r($top_three);
?>