<?php
function stringtolower(&$words)
{ 
  try
  {
    foreach($words as $key=>$value)
    {
      if(is_array($value))
      {
        //echo "digui $value <br>";
        stringtolower(&$words[$key]);
      }
      else
      {
        if(is_string($value))
        {
          //echo "$value <br/>";
          $words[$key] =  strtolower($value);
        
        }
      }
    }
  }
  catch(Exception $e)
  {
    echo "$e->getMessage";
  }
}

function OutPutArray($array)
{
  foreach($array as $key=>$value)
  {
    echo "$key => $value <br/>";
  }
  print("-----------------------------------------<br/>");
}

?>
