<?php
  $first  = new DateTime("1990-10-25 8:00:00am", new DateTimeZone('America/New_York'));

  $second = new DateTime(date('r'));

  $diff = $second->diff($first);

  printf("The Two dates have %d weeks , %s days, %d hours , %d minutes , and %d seconds elapsed between them",
          floor($diff->format('%a')/7),
           $diff->format('%a')%7,
           $diff->format('%h'),
           $diff->format('%i'),
           $diff->format('%s'));



?>
