<?php
$A = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$x = 0;
$y = 0;

//Display Board
echo "\n\n    " . $A[0] . " | " . $A[1] . " | " . $A[2]  ;
echo "\n  -------------\n";
echo "    " . $A[3] . " | " . $A[4] . " | " . $A[5]  ;
echo "\n  -------------\n";
echo "    " . $A[6] . " | " . $A[7] . " | " . $A[8]  ;
echo "\n\n\n";
while ($x == 0) {
$y = 0;

//Player 1 Input
while ($y == 0) {
$sel = readline("Player 1 Enter a number: ");
if ($sel > 0 && $sel < 10) {
    if ($A[$sel-1] != "X" && $A[$sel-1] != "O") {
    $A[$sel - 1] = "X";
    $y = 1;}
    else {echo "That is not a valid entry, enter an available number 1-9\n";
    }}
else {echo "That is not a valid entry, enter an available number 1-9\n";
;}
}

//Display Board
echo "\n\n    " . $A[0] . " | " . $A[1] . " | " . $A[2]  ;
echo "\n  -------------\n";
echo "    " . $A[3] . " | " . $A[4] . " | " . $A[5]  ;
echo "\n  -------------\n";
echo "    " . $A[6] . " | " . $A[7] . " | " . $A[8]  ;
echo "\n\n\n";
$y = 0;

//P1 Win Conditions(broken)
//if ($A[0] == "X" && $A[1] == "X" && $A[2] == "X"); {
//echo "Player 1 Wins\n";
//$x = 1;
//$y = 1;
//}

//Player 2 Input
while ($y == 0) {
$sel = readline("Player 2 Enter a number: ");
if ($sel > 0 && $sel < 10) {
    if ($A[$sel-1] != "O" && $A[$sel-1] != "X") {
    $A[$sel - 1] = "O";
    $y = 1;}
    else {echo "That is not a valid entry, enter an available number 1-9\n";
    }}
else {echo "That is not a valid entry, enter an available number 1-9\n";
}}

//Display Board
if ($x != 1){
echo "\n\n    " . $A[0] . " | " . $A[1] . " | " . $A[2]  ;
echo "\n  -------------\n";
echo "    " . $A[3] . " | " . $A[4] . " | " . $A[5]  ;
echo "\n  -------------\n";
echo "    " . $A[6] . " | " . $A[7] . " | " . $A[8]  ;
echo "\n\n\n";}

//P2 Win Conditions (broken)
if ($x != 1){
if ($A[0] && "O" && $A[1] == "O" && $A[2] == "O"); {
$x = 1;
echo "Player 2 Wins\n";
}
}
}
?>
