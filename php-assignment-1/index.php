<?php
//Code by Dylan Gibbons (SN: 200230810); Course: COMP1006;

/*Instructions
Caclulate Pv = nRT
Where P is pressure, V is volume in meters cubed, N is the numbers of moles,
R is the gas constant with a value of 8.314, and T is temperature

• Ask the user to input the value for pressure P
• Ask the user to enter the length, width and height and automatically develop 
a variable to calculate the volume using those variable.
• Ask the user for the temperature and add 273.14 to the value.
• All of the parameters are of type float.
• Calculate the number of moles. Round up the number to the nearest whole number.
• If the value is even, turn it into an odd value and if it's odd, turn it into an even value.
• Display the initial value for the mole, the rounded whole number in type float 
and the odd or even value after.

The complete code in a pdf file.
• Comment your codes and test them. Submit it into the assignment 1
folder in Pdf format.
*/

$pressure = readline("Please enter a value for the pressure.");
$pressure = floatval($pressure);

$length = readline("Please provide a length.");
$width = readline("Please provide a width.");
$height = readline("Please provide a height.");

$volume = $length * $width * $height;
$volume = floatval($volume);

$temperature = readline("Please provide the temperature");
$temperature += 273.14;
$temperature = floatval($temperature);

$gasConstant = 8.314;

//For numOfMoles, Pv = nRT; therefore, n = (Pv)/(RT);

$numOfMoles = floatval(($pressure*$volume)/($gasConstant*$temperature));
//Using ceil() since you asked for it to round up
$numOfMoles2 = floatval(ceil($numOfMoles));
//Regardless if it's even or odd, adding 1 will change it to the opposite... An if-else statement is redundant.
$numOfMoles3 = floatval($numOfMoles2 + 1);

//Displaying values
echo "P = $pressure\n";
echo "v = $volume\n";
echo "n = $numOfMoles\n";
echo "rounded n = $numOfMoles2\n";
echo "coverted n = $numOfMoles3\n";
echo "R = $gasConstant\n";
echo "T = $temperature\n";

echo "Pv = nRT\n";
echo "($pressure * $volume) = ($numOfMoles * $gasConstant * $temperature)\n";
$calculation1 = $pressure * $volume;
$calculation2 = $numOfMoles * $gasConstant * $temperature;

echo "$calculation1 = $calculation2";

//Code was tested and successfully executed in the programiz online PHP compiler


?>