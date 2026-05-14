<?php
// Syntax - Function Code Demo
class Calculation {
    // Function Definition
    function totalSum() {
        $num1 = 10;
        $num2 = 5;
        // Add two numbers
        $sum = $num1 + $num2;
        // Return result
        return $sum;
    }
}
// Create Object
$obj = new Calculation();
// Call Function
echo $obj->totalSum();

/*
Program Flow
| Step | Action          |
| ---- | --------------- |
| 1    | Create class    |
| 2    | Define function |
| 3    | Store numbers   |
| 4    | Add numbers     |
| 5    | Return result   |
| 6    | Create object   |
| 7    | Call function   |
| 8    | Display output  |
*/
?>