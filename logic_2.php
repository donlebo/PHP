<?php


$operazione = $_GET["op"];
$array = $_GET["whole"];
$whole = explode(",", $whole);
$array2 = $_GET["whole_2"];
$whole = explode(",", $whole_2);


switch ($operation) {
    case "printElements":
      
      printElements($whole);
      break;

      case "sumElements":
       
        echo "<br> The sum is: " . sumElements($whole) . "<br>" ;
        break;

      case "subElements":
         
          echo "<br> The subtraction is: " .subElements($whole) . "<br>";
          break;

    case "sumElementsOfArray":
        
        echo "<br> The sum of the arrays is:";
        $sumArrays = sumElementsOfArrays($whole, $whole_2);
        printElements($sumArrays);
        break;

    case "createMaxArray":
          
          echo "<br> The max array is:";
          $maxArrays = createMaxArray($whole, $whole_2);
          printElements($maxArrays);
          break;

    case "ceckArray":
        
        $res = checkArray($arr, $whole_2);

        if($res == true){
          echo "<br> The array is different";  
        }else{
        echo "<br> The array contains the same elements!";
        }

        break;
  
    
    }


$arr = [1,2,3];

function printElements($arr)
{
  for($i=0; $i < count($arr); $i++)
  {
    echo " <br> Element" . $arr[$i] . " is in the position:" . $i;
  }
}

printElements($arr);



function sumElements($arr)
{
  $risul = 0;
  for($i=0; $i < count($arr); $i++)
  {
    $risul += $arr[$i];
  }
  return $risul;
}



function subElements($arr)
{
  $risul= 0;
  for($i=0; $i < count($arr); $i++)
  {
    $risul -= $arr[$i];
  }
  return $risul;
}






$whole_2 = [99,999,9999];

printElements($whole_2);


function sumElementsOfArrays($whole,$whole_2)
{
  $risul = [];
  for($i=0; $i < count($whole); $i++)
  {
    $risul[$i] = $whole[$i] + $whole_2[$i] ;
  }
  return $risul;
}




function createMaxArray($whole, $whole_2)
{
    $risul = [];
    if (count($whole) > count($whole_2)) 
    {
        for ($i = 0; $i < count($whole_2); $i++) 
        {
            if ($whole[$i] > $whole_2[$i]) 
            {
                $risul[$i] = $whole[$i];
            }
             else 
            {
                $risul[$i] = $whole_2[$i];
            }
        }
        while ($i < count($whole)) 
        {
            $risul[] = $whole[$i];
            $i++;
        }
    } else if (count($whole) < count($whole_2))

    {
        for ($i = 0; $i < count($whole); $i++) 
        {
            if ($whole[$i] > $whole_2[$i]) 
            {
                $risul[$i] = $whole[$i];
            } else {
                $risul[$i] = $whole_2[$i];
            }
        }
        while ($i < count($whole_2)) 
        {
            $risul[] = $whole_2[$i];
            $i++;
        }
    }
     else 
    {
        for ($i = 0; $i < count($whole); $i++) 
        {
            if ($whole[$i] > $whole_2[$i])
             {
                $risul[$i] = $whole[$i];
            } 
            else 
            {
                $risul[$i] = $whole_2[$i];
            }
        }
    }
    return $risul;
}





function checkArray($whole, $whole_2)
{
    $arr4 = array_merge($whole, $whole_2);
    for ($i = 0; $i < count($arr4) - 1; $i++)
     {
        if ($arr4[$i] == $arr4[$i + 1])
         {
            return false;
        }
    }
    return true;
}

if (checkArray($whole, $whole_2)) 
{
    echo " <br> Different elements<br>";
} 
else 
{
    echo " <br> Equal elements<br>";
}