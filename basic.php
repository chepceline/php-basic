<?php
/* what is a variable

    A variable is a like a container for storing data

    PHP variables

    A variable can have a short name like (x and y) or a more descriptive name (age, carname,total_volume)

    Rules for PHP variables

    1. A variable starts with the $ sign, followed by the name of the variable
    2. A variable name must start with a letter or the underscore character
    3. A variable name cannot start with a number
    4. A variable name can only contain alpha-numeric characters and underscores
    5. Variable names are case-sensitive

     write a php program that will print the grades based on the scores above

91-100=A
81-90=B
71-80=C
61-70=D
51-60=6
50 and below = F */


$studentScores = [
    "Sarah Johnson" => ["eng" => 85, "Math" => 78, "kisw" => 90],
    "David Smith" => ["eng" => 92, "Math" => 88, "kisw" => 85],
    "Emily Davis" => ["eng" => 78, "Math" => 45, "kisw" => 92],
    "Michael Brown" => ["eng" => 89, "Math" => 60, "kisw" => 84],
    "Olivia Wilson" => ["eng" => 94, "Math" => 91, "kisw" => 89],
    "William Lee" => ["eng" => 40, "Math" => 82, "kisw" => 77],
    "Sophia Miller" => ["eng" => 88, "Math" => 57, "kisw" => 95],
    "James Anderson" => ["eng" => 91, "Math" => 86, "kisw" => 88],
    "Ava Martinez" => ["eng" => 83, "Math" => 79, "kisw" => 91],
    "Ethan Taylor" => ["eng" => 87, "Math" => 52, "kisw" => 87],
];

foreach ($studentScores as $student => $scores) {
    $engScore = $scores["eng"];
    $mathScore = $scores["Math"];
    $kiswScore = $scores["kisw"];
    
    // Calculate the average score for each student
    $averageScore = ($engScore + $mathScore + $kiswScore) / 3;
    
    // Determine the grade based on the average score
    if ($averageScore >= 91 && $averageScore <= 100) {
        $grade = "A";
    } elseif ($averageScore >= 81 && $averageScore <= 90) {
        $grade = "B";
    } elseif ($averageScore >= 71 && $averageScore <= 80) {
        $grade = "C";
    } elseif ($averageScore >= 61 && $averageScore <= 70) {
        $grade = "D";
    } elseif ($averageScore >= 51 && $averageScore <= 60) {
        $grade = "E";
    } else {
        $grade = "F";
    }
    
    // Print the student's name, average score, and grade
    echo "Student: $student\n";
    echo "Average Score: $averageScore\n";
    echo "Grade: $grade\n";
    echo "------------------------\n";
}