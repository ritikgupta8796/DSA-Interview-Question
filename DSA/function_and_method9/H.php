<?php

/*
|--------------------------------------------------------------------------
| Binomial Coefficient (nCr)
|--------------------------------------------------------------------------
|
| This program demonstrates how to calculate
| the Binomial Coefficient using factorials.
|
| Formula:
|   nCr = n! / r! * (n-r)!
|
| Example:
|   5C2 = 5! / (2! * 3!)
|       = 120 / (2 * 6)
|       = 10
|
*/

include('G.php');

/*
|--------------------------------------------------------------------------
| Function Definition
|--------------------------------------------------------------------------
*/

function binomialCoeff(int $n, int $r) {

    // Find factorial of n
    $fac_n = factorialNum($n);

    // Find factorial of r
    $fac_r = factorialNum($r);

    // Find factorial of (n-r)
    $fac_nr = factorialNum($n - $r);

    // Apply nCr formula
    $final = $fac_n / ($fac_r * $fac_nr);

    // Return result
    return $final;
}

// Function Call
echo binomialCoeff(5, 2);

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| Parameters:
|   $n, $r
|
| Arguments:
|   5, 2
|
| Calculation:
|   5! = 120
|   2! = 2
|   3! = 6
|
|   5C2 = 120 / (2 * 6)
|       = 10
|
| Output:
|   10
|
*/

/*
Program Flow
| Step | Action                          |
| ---- | ------------------------------- |
| 1    | Include factorial file          |
| 2    | Define nCr function             |
| 3    | Calculate factorials            |
| 4    | Apply formula                   |
| 5    | Return result                   |
| 6    | Display output                  |
*/

echo "<pre>
Concept Used
    - Functions
    - Include Statement
    - Parameters
    - Arguments
    - Factorial Logic
    - Arithmetic Operations
    - Return Statement
    - Binomial Coefficient Formula
</pre>";

?>