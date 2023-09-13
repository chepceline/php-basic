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


$score=90;

if ($score<=50){
    echo "F grade";
}
else if ($score>=51 and $score<=60){
    echo "E grade";
}
else if ($score>=61 and $score<=70){
    echo "D grade";
}
else if ($score>=71 and $score<=80){
    echo "C grade";
}
else if ($score>=81 and $score<=90){
    echo "B grade";
}
else if ($score>=91 and $score<=100){
    echo "A grade";
}
else {
    echo "invalid input";
}
// output B grade