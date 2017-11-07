<?php

$popis_ocjena = array ( "Luka" => array("Biologija" => 4, "Informatika" => 5, "Programiranje" => 4), "Rimac" => array("Biologija" => 5, "Informatika" => 5, "Programiranje" => 4), "Darko" => array("Biologija" => 5, "Informatika" => 3, "Programiranje" => 4));

$suma = 0;

foreach($popis_ocjena as $student)
{
    foreach($student as $ocjena)
	{
        $suma+=$ocjena;
    }
    echo "<br>Prosjek od {$popis_ocjena[$student]}: " . round($suma/3, 2);
    $suma = 0;
}