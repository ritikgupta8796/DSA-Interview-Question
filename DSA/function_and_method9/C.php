<?php

/*
|--------------------------------------------------------------------------
| Syntax with Parameter
|--------------------------------------------------------------------------
|
| This program demonstrates how to create a function
| with parameters in PHP.
|
| The function accepts two integer values,
| calculates their sum, and returns the result.
|
*/

function getTotalSum(int $num1, int $num2) {

    // Add both numbers
    $sum = $num1 + $num2;

    // Return total sum
    return $sum;
}

// Function Call
echo getTotalSum(5, 5);

/*
Program Flow
| Step | Action            |
| ---- | ----------------- |
| 1    | Define function   |
| 2    | Accept parameters |
| 3    | Add numbers       |
| 4    | Return result     |
| 5    | Call function     |
| 6    | Display output    |
*/

echo "<pre>
Conscept Used
    - Functions
    - Parameters
    - Type Hunting
    - Return Statement
    - Function Call
    - Arithmetic Operations
</pre>";

?>