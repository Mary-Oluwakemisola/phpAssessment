<?php
require './Packages/Classes/Year.php';

$year = new Year();
$userInput = $year->accepts(2020);
$userInput->checkLeapYear();
