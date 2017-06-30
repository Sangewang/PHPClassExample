<?php
 function commercial_sponsorship($letter,$number)
 {  
    print "This episode of Sesame Street is brought to you by ";
    print "the letter $letter and number $number.\n";
    echo "<br/>";
 }

 commercial_sponsorship('G',3);

 $another_letter = 'X';
 $another_number = 15;
 commercial_sponsorship($another_letter,$another_number);

 function add_num(&$a)
 {
   $a++;
   echo "In the function add_num to show $a<br/>";
 }
  $number = 1;
  echo "before use add function $number <br/>";
  add_num(&$number);
  echo "after use add function $number <br/>";

?>
