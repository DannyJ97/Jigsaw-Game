<!--Functions for dice to use-->
<?php

   /*there are 36 possible combinations of numbers and only 12 posible answers for sum
    Generate 2 random numbers between 1 and 6 and add them together. Save that as your sum.
   */
    function sumIs($guess){
        $left_die_num = rand(0,6);
        $right_die_num = rand(0,6);
        $sum = $left_die_num + $right_die_num;

        #ranges 1-6 and 7-12. If sum and guess are both in same range then the player may move on
        if (($sum > 0 && $sum <= 6) && ($guess > 0 && $guess <= 6)){
            return true;
        }elseif (($sum > 6 && $sum <= 12) && ($guess > 6 && $guess <= 12)) {
            return true;
        }else {
            return false;
        }
    }

?>
