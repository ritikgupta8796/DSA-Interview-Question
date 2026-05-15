<?php

/*
|--------------------------------------------------------------------------
| Product of Two Numbers
|--------------------------------------------------------------------------
|
| This program demonstrates how to create
| a function that multiplies two numbers
| and returns the product.
|
*/

function multiplyOfTwo(int $num1, int $num2) {

    // Multiply both numbers
    $prod = $num1 * $num2;

    // Return product
    return $prod;
}

// Function Call
echo multiplyOfTwo(3, 5);

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| Parameters:
|   $num1, $num2
|
| Arguments:
|   3, 5
|
| Calculation:
|   3 * 5 = 15
|
| Output:
|   15
|
*/

/*
Program Flow
| Step | Action                    |
| ---- | ------------------------- |
| 1    | Define function           |
| 2    | Accept parameters         |
| 3    | Multiply numbers          |
| 4    | Return product            |
| 5    | Call function             |
| 6    | Display output            |
*/

echo "<pre>
Concept Used
    - Functions
    - Parameters
    - Arguments
    - Type Hinting
    - Return Statement
    - Arithmetic Operations
</pre>";

?>