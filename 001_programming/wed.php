<?php

$x = 0;

echo "\n\n---------------------------------------------------------------------------------------\n\n               +++++         ++++++++++      +++++++++++        +++++ \n             +++    +++     +++      +++     +++              +++    +++ \n            +++     +++     +++     +++      +++             +++     +++ \n           ++++++++++++     +++++++++        +++++++        ++++++++++++ \n           +++      +++     +++     +++      +++            +++      +++ \n           +++      +++     +++      +++     +++            +++      +++ \n           +++      +++     +++      +++     ++++++++++     +++      +++  \n";
echo "\n   ++++++++++   ++++++++++++   +++++   +++   +++++++       +++++++++++    ++++++++++ \n   +++              +++        ++++++  +++   +++   +++     +++           +++      +++ \n   +++              +++        +++ +++ +++   +++     +++   +++           +++     +++ \n   ++++++++++       +++        +++  ++++++   +++     +++   +++++++       +++++++++ \n   +++              +++        +++   +++++   +++     +++   +++           +++     +++ \n   +++              +++        +++    ++++   +++   +++     +++           +++      +++ \n   +++         +++++++++++++   +++     +++   +++++++       +++++++++++   +++      +++ \n\n---------------------------------------------------------------------------------------\n\n";

while ($x == 0) {
    $shape = readline("\nEnter your shape, help to see your options, or exit: ");

    if ($shape == "circle" || $shape == "Circle") {
      echo "\n\n        ---    \n     -   X   -   \n    -    X    -  \n    -         -  \n     -       -   \n        ---    \n\n";
      $radius = readline("What is the radius of your circle: ");
      $circlearea = ($radius * $radius) * 3.14159;
      echo "\n\n---------------------------------------\n  The area of your circle is " . $circlearea . "\n---------------------------------------";
      echo "\n\n\n\n";

    } else if ($shape == "square" || $shape == "Square") {
      echo "\n\n     ________\n    |        |\n    |        |\n    |        |\n    |xxxxxxxx|\n\n";
      $length = readline("What is the side length of your square: ");
      $squarearea = $length * $length;
      echo "\n\n---------------------------------------\n  The area of your square is " . $squarearea . "\n---------------------------------------";
      echo "\n\n\n\n";

    } else if ($shape == "triangle" || $shape == "Triangle") {
      echo "\n\n       /\    x\n      /  \   x\n     /    \  x\n    /______\ x\n\n";
      $height = readline("What is the height of your triangle: ");
      echo "\n\n       /\ \n      /  \ \n     /    \ \n    /xxxxxx\ \n\n";
      $blength = readline("What is the length of the base of your triangle: ");
      $trianglearea = ($height * $blength);
      echo "\n\n---------------------------------------\n  The area of your triangle is " . $trianglearea . "\n---------------------------------------";
      echo "\n\n\n\n";

    } else if ($shape == "rectangle" || $shape == "Rectangle") {
      echo "\n\n     _____________\n    |             |\n    |             |\n    |             |\n    |xxxxxxxxxxxxx|\n\n";
      $length = readline("What is the length of your rectangle: ");
      echo "\n\n     _____________\n    X             |\n    X             |\n    X             |\n    X_____________|\n\n";
      $width = readline("What is the width of your rectangle: ");
      $rectarea = $length * $width;
      echo "\n\n---------------------------------------\n  The area of your rectangle is " . $rectarea . "\n---------------------------------------";
      echo "\n\n\n\n";

    } else if ($shape == "ellipse" || $shape == "Ellipse") {
      echo "\n\n          _________  \n      ----         ---- \n    --        xxxxxxxxx-- \n      ----         ---- \n          ---------  \n\n";
      $xaxis = readline("Enter length of the x axis: ");
      echo "\n\n          _________  \n      ----    x    ---- \n    --        x        -- \n      ----         ---- \n          ---------  \n\n";
      $yaxis = readline("Enter length of the y axis: ");
      $ellarea = 3.14159 * $xaxis * $yaxis;
      echo "\n\n---------------------------------------\n  The area of your ellipse is " . $ellarea . "\n---------------------------------------";
      echo "\n\n\n\n";

    } else if ($shape == "exit" || $shape == "Exit") {
      $x = 1;

    } else if ($shape == "help" || $shape == "Help") {
      echo "\n\n Available Options \n|----------------|\n|                |\n|     Circle     |\n|     Square     |\n|    Triangle    |\n|    Rectangle   |\n|     Ellipse    |\n|                |\n|----------------|\n";

    } else {
      echo "Not a valid entry, type 'help' to see options\n";
    }
}
 ?>
