<?php
#open the file
$calories = file_get_contents('calories.txt');
#initiate variables
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$new_sum = 0;
$all_elves = [];
$elf = 0;
// $elf = 0;
#parse the calorie list
$list_calories = (explode("\r\n", $calories));
#add each element to $new_sum unless it's blank if it's instead compare it to sum, if it's greater than sum, store it in sum
#iterate +1 on elf when blank to know which elf it is. 
for ($i=0; $i <= count($list_calories)-1; $i++) {
    if ($list_calories[$i]==""){
        $elf+=1;
        $all_elves[]=$new_sum; 
        if($new_sum > $sum1){
            $my_elf1 = $elf;
            $sum3 = $sum2;
            $sum2 = $sum1;
            $sum1 = $new_sum;
            
        }
        elseif($new_sum > $sum2){
            $my_elf2 = $elf;
            $sum3 = $sum2;
            $sum2 = $new_sum;
            
            
        }
        elseif($new_sum > $sum3){
            $my_elf3 = $elf;
            $sum3 = $new_sum;
        }
        // echo $sum1." and elf".$my_elf1."&".$sum2." and elf".$my_elf2." and ".$sum3." and elf".$my_elf3."\n";
        $new_sum = 0;
    }
    $new_sum+=intval($list_calories[$i]);
    }
    // echo $sum1."\n".$sum2."\n".$sum3."\n";
    // echo $sum1+$sum2+$sum3."\n";
    sort($all_elves);
    print_r($all_elves)

//     // if (array_sum($list_calories)>$sum){
//     // $sum = array_sum($i);
//     // $max_i = $i;
// }
// echo  $i."\n".$sum;
// 71300
?>