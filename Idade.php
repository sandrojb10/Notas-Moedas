<?php

$dias = readline();
echo intdiv($dias, 365) . " ano(s)\n";
$dias %= 365;
echo intdiv($dias, 30) . " mes(es)\n";
$dias %= 30;
echo $dias . " dia(s)\n";