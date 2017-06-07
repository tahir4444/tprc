<?php
   
   
   
   $str  =  '0123456789';
   
   
   // print_r($str[1]);
   
   for ($x = strlen($str); $x >= 0; $x--) :
      echo @$str[$x];
   endfor;
   
   
   
   echo '<br />';
   echo '<br />';
   echo '<br />';
   echo '<br />';
   echo '<br />';
   
   
   $array   =  array(8,1,2,6,5,6,9,15,20,9,14,7,15,10,5);
   
   echo "Unsorted array is: ";
   echo "<br />";
   print_r($array);
   
   $sorted  =  array();
   
   for($i = 0; count($array) > $i; $i++) {
   
      for($x = $i+1; $x <= count($array); $x++) :
      
         if($array[$x] < $array[$i]) :
            $temp = $array[$i];
            
            
            
            echo $array[$x] . '___' .$array[$i] .'<br />';
         endif;
      
      
      endfor;
      
      // echo $array[$i];
      // echo $i;
      
   
   }
   
   echo "<br />";
   echo "<br />";
   echo "<br />";
   echo "<br />";
   echo "Sorted array is: ";
   echo "<br />";
   
   // print_r($sorted);
   
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
   
      
      $dups =  array();
      foreach ($array as $arrayItem) :
         
         $dups[]  =  $arrayItem;
         
         
      
      endforeach;
   
   
   
   
   
   