<?php

/* Calculate the number of minutes in a week using variables
-- $DaysPerWeek
-- $HoursPerDay
-- $MinutesPerHour

How many minutes are there in a week in the Bilky Way, a near parallel galaxy,
if there are 26 hours on a day there? 
*/
$br = "<br>";
$sp = " ";

$DaysPerWeek = 7;
$HoursPerDay = 24;
$MinutesPerHour = 60;
$Total = $DaysPerWeek * $HoursPerDay * $MinutesPerHour;


print "Homework for Saturday, October 6, 2012: Exercise 2" . $br . $br;
print "The number of minutes in a week is $DaysPerWeek * $HoursPerDay * $MinutesPerHour$sp=$sp". $Total . $br . $br;

$HoursPerDay = 26; /* Bilky way has long days */
$Total = $DaysPerWeek * $HoursPerDay * $MinutesPerHour;
print "The number of minutes in a week in the Bilky Way is $DaysPerWeek * $HoursPerDay * $MinutesPerHour$sp=$sp" . $Total . $br;

?>