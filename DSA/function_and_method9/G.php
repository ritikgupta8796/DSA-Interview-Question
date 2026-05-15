<?php

/*
|--------------------------------------------------------------------------
| Find Factorial of a Number
|--------------------------------------------------------------------------
|
| This program demonstrates how to calculate
| the factorial of a number using a function
| and a loop in PHP.
|
| Factorial Formula:
|   n! = n × (n-1) × (n-2) ... × 1
|
| Example:
|   5! = 5 × 4 × 3 × 2 × 1 = 120
|
*/

function factorialNum(int $num1) {

    // Initial factorial value
    $fac = 1;

    // Loop for factorial calculation
    for($i = 1; $i <= $num1; $i++) {

        $fac = $fac * $i;
    }

    // Return factorial
    return $fac;
}

// Function Call
echo factorialNum(7);

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| Parameter:
|   $num1
|
| Argument:
|   7
|
| Calculation:
|   7! = 7 × 6 × 5 × 4 × 3 × 2 × 1
|
| Output:
|   5040
|
*/

/*
Program Flow
| Step | Action                          |
| ---- | ------------------------------- |
| 1    | Define function                 |
| 2    | Accept parameter                |
| 3    | Initialize factorial variable   |
| 4    | Run loop                        |
| 5    | Multiply numbers                |
| 6    | Return factorial                |
| 7    | Display output                  |
*/

echo "<pre>
Concept Used
    - Functions
    - Parameters
    - Arguments
    - For Loop
    - Factorial Logic
    - Arithmetic Operations
    - Return Statement
</pre>";

?>