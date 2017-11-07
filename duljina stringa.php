<?php
$someStr = "lfdksjglfdksjglksdjflkjglksdfjklgjdfsfsg";
echo((strlen($someStr) < 10) ? substr($someStr, 0,5) : substr($someStr, 0,20));
?>