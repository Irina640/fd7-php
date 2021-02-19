<?php

function addButton($number,$order){
//    $output = $number % 3; для 5-го задания  убрали % 3
      $output = $number;
// menjaem 4 na $order
   if ($number % $order == 0) {
     echo '<button class="success">' .  $output . '</button>';
   }
   else {
     echo '<button>' . $output . '</button>';
   }
	
}

function addMultipleButtons($start, $end, $order){
   // addButton($start);
   addButton($start, $order);

    if ($start < $end){
        addMultipleButtons($start +1, $end, $order);
    }
}
function isValueInt($value) {
    if ((int) $value > 0 || $value === "0") {
        return true;
    }
    return false;
}