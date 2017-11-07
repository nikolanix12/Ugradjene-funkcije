<?php
$bilosta = "    PiVO i ceVApI";
$bilosta = trim($bilosta);

echo $bilosta;

$bilosta = strtoupper($bilosta);

echo "<br>" . $bilosta;

$bilosta = strtolower($bilosta);

echo "<br>" . $bilosta;

echo "<br><br>Broj slova: ". strlen($bilosta);