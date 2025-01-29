<?php

$diploma = readline("Please input your diploma: ");
$yearsOfExp = readline("Please enter your years of experience: ");
$gradDate = readline("Please enter your graduation date: ");
$skills = readline("Please enter your relevant skills: ");

$employeeData = array($diploma, $yearsOfExp, $gradDate, $skills);
$jobRequirements = array("computer programming", "3", "2022", "PHP");
$count = 0;
$arrayCount = 0;

// for($i = 0; $i < 4; $i++){
//     if($employeeData[$i] === $jobRequirements[$i]){
//         $count++;
//     }
// }

foreach ($employeeData as $x) {
    if($x === $jobRequirements[$arrayCount]){
        $count++;
    }
    $arrayCount++;
  }

if($count == 4){
    echo "You are eligible for the job.\nYour interview is in 1 week!";
} else {
    echo "We are sorry. We moved on with other candidates.";
}

?>