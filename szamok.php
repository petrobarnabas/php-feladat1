<?php
    $t = [1 ,5, 8, 17, 25];

    for( $i = 0 ; $i < count( $t ) ; ++$i )
    {
        echo "{$t[$i]}, ";
    }
?>

<?php
    $t = [1 ,5, 8, 17, 25];

    foreach($t as $szamok)
    {
        if ($szamok % 2 == 0)
        {
            echo "{$szamok}\n";
        }
    }
?>

<?php
    $t = [1 ,5, 8, 17, 25];

    $t = array_reverse($t);

    foreach($t as $szam)
    {
            echo "{$szam}, ";
    }
?>

<?php
    $t = [1 ,5, 8, 17, 25];

    $ossz = array_sum($t);

        echo $ossz;

?>

<?php
    $t = [1 ,5, 8, 17, 25];

    $ossz = array_sum($t);

    $atlag = $ossz / count($t);

    echo $atlag;

?>