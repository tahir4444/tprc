<?php
   
   // echo $x = 2^2;
   

   
function getExponent($a,$b) {
   
   // echo $a*$b;
   return pow ($a,$b);
   
}

$p       =  100000;
$ri      =  9.9;
$rip1    =  $ri + 1;

$rip1Div =  $rip1 / 12;



$nm   =  120;

// getTheValue(5,5);

// echo ($p * $ri / 12) * ((1 + $ri / 12) ^ 120);
// echo ((rip1 / 12) ^ 120);


function calculateEMI ($principal,$tenure,$rateInterest) {
   
   // $rateInterest  =  $rateInterest / 100;
   
   // return ($principal * $rateInterest/12) * pow((1+$rateInterest/12),$tenure) / (pow((1+$rateInterest/12),$tenure-1));
   // return (($principal * $rateInterest/12) / 100) * (pow(1+$rateInterest/12/100,$tenure)) / (pow(1+$rateInterest/12/100,$tenure)-1);
   return (pow(1+$rateInterest/12/100,$tenure)-1);
 }




echo calculateEMI(100000,120,9.90);