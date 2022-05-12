<?php
    $whole = [1, 2, 3, 4, 5];
    print_r($whole);

function printElements($whole)
{
    for ($c = 0; $c < count($whole); $c++) {
        echo "Elemento " . $whole[$c] . " nella posizione $c <br>";
    }
}
function sumElements($whole)
{
    $sum = 0;
    for ($c = 0; $c < count($whole); $c++) {
        $sum = $sum + $whole[$c];
    }
    return $sum;
}
function subElements($whole)
{
    $sub = $whole[0];
    for ($c = 1; $c < count($whole); $c++) {
        $sub = $sub - $whole[$c];
    }
    return $sub;
}
function sumElementsOfArrays($whole_2, $arr2)
{
    $sum = [];
    if (count($whole_2) > count($arr2)) {
        for ($c = 0; $c < count($arr2); $c++) {
            $sum[] = $whole_2[$c] + $arr2[$c];
        }
        while ($c < count($whole_2)) {
            $sum[] = $whole_2[$c];
            $c++;
        }
    } else if (count($whole_2) < count($arr2)) {
        for ($c = 0; $c < count($whole_2); $c++) {
            $sum[] = $whole_2[$c] + $arr2[$c];
        }
        while ($c < count($arr2)) {
            $sum[] = $arr2[$c];
            $c++;
        }
    } else {
        for ($c = 0; $c < count($whole_2); $c++) {
            $sum[] = $whole_2[$c] + $arr2[$c];
        }
    }
    return $sum;
}
function createMaxArray($whole_2, $arr2)
{
    $max = [];
    if (count($whole_2) > count($arr2)) {
        for ($c = 0; $c < count($arr2); $c++) {
            if ($whole_2[$c] > $arr2[$c]) {
                $max[$c] = $whole_2[$c];
            } else {
                $max[$c] = $arr2[$c];
            }
        }
        while ($c < count($whole_2)) {
            $max[] = $whole_2[$c];
            $c++;
        }
    } else if (count($whole_2) < count($arr2)) {
        for ($c = 0; $c < count($whole_2); $c++) {
            if ($whole_2[$c] > $arr2[$c]) {
                $max[$c] = $whole_2[$c];
            } else {
                $max[$c] = $arr2[$c];
            }
        }
        while ($c < count($arr2)) {
            $max[] = $arr2[$c];
            $c++;
        }
    } else {
        for ($c = 0; $c < count($whole_2); $c++) {
            if ($whole_2[$c] > $arr2[$c]) {
                $max[$c] = $whole_2[$c];
            } else {
                $max[$c] = $arr2[$c];
            }
        }
    }
    return $max;
}
function order($arr)
{
    do {
        $change = false;
        for ($c = 0; $c < count($arr) - 1; $c++) {
            if ($arr[$c] > $arr[$c + 1]) {
                $temp = $arr[$c + 1];
                $arr[$c + 1] = $arr[$c];
                $arr[$c] = $temp;
                $change = true;
            }
        }
    } while ($change);
    return $arr;
}

function checkArray($whole_2, $arr2)
{
    $arr3 = array_merge($whole_2, $arr2);
    $arr3 = order($arr3);
    for ($c = 0; $c < count($arr3) - 1; $c++) {
        if ($arr3[$c] == $arr3[$c + 1]) {
            return false;
        }
    }
    return true;
}

$whole_2 = [1, 4, 8, 90];
$arr2 = [4, 56, 23, 95,55,66];
echo "Primo array <br>";
printElements($whole_2);
echo "<br>";
echo "la somma degli elementi è " . sumElements($whole_2) . "<br>";
echo "<br>";
echo "la sottrazione degli elementi è " . subElements($whole_2) . "<br>";
echo "<br>";
echo "Secondo array <br>";
printElements($arr2);
echo "<br>";
$sum = sumElementsOfArrays($whole_2, $arr2);
echo "La somma dei due array è <br>";
printElements($sum);
$as = createMaxArray($whole_2, $arr2);
echo "<br>";
echo "Gli elementi maggiori dei due array sono: <br>";
printElements($as);
if (checkArray($whole_2, $arr2)) {
    echo "Gli elementi dei due array sono diversi <br>";
} else {
    echo "Gli elementi dei due array sono uguali <br>";
}
