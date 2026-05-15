<?php

/*
|--------------------------------------------------------------------------
| Parameters v/s Arguments
|--------------------------------------------------------------------------
|
| This program demonstrates the difference between
| parameters and arguments in PHP functions.
|
| Parameters are variables declared inside the function.
| Arguments are actual values passed during the function call.
|
*/

function getTotalSum(int $num1, int $num2) { // formal parameter -> definition time declaration

    // Add both numbers
    $sum = $num1 + $num2;

    // Return total sum
    return $sum;
}

// Function Call with Arguments
echo getTotalSum(10, 8); // actual argument -> call time

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| Parameters:
|   $num1, $num2
|
| Arguments:
|   10, 8
|
*/

/*
Program Flow
| Step | Action                    |
| ---- | ------------------------- |
| 1    | Define function           |
| 2    | Declare parameters        |
| 3    | Pass arguments            |
| 4    | Add numbers               |
| 5    | Return result             |
| 6    | Display output            |
*/

echo "<pre>
Concept Used
    - Functions
    - Parameters
    - Arguments
    - Type Hinting
    - Return Statement
    - Function Call
    - Arithmetic Operations
</pre>";

?>