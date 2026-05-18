<?php 

/*
|--------------------------------------------------------------------------
| Function Overloading
|--------------------------------------------------------------------------
|
| Function Overloading means creating multiple functions
| with the same name but different parameters.
|
| In many programming languages like C++ and Java,
| function overloading is supported directly.
|
| Example:
|
|   sum(2, 3)
|   sum(2, 3, 4)
|
| Both functions have the same name "sum"
| but different number of parameters.
|
*/

/*
|--------------------------------------------------------------------------
| Function Overloading in PHP
|--------------------------------------------------------------------------
|
| PHP does NOT support traditional function overloading
| like C++ or Java.
|
| However, similar behavior can be achieved using:
|
|   - Default Arguments
|   - Variable-length Arguments (...$args)
|   - Magic Methods (__call)
|
*/

/*
|--------------------------------------------------------------------------
| Example Using Variable-length Arguments
|--------------------------------------------------------------------------
*/

function addNumbers(...$numbers) {

    // Store total
    $sum = 0;

    // Loop through all numbers
    foreach($numbers as $num) {
        $sum += $num;
    }

    // Return total
    return $sum;
}

/*
|--------------------------------------------------------------------------
| Function Calls
|--------------------------------------------------------------------------
*/

// Two arguments
echo addNumbers(2, 3);

echo "<br>";

// Three arguments
echo addNumbers(2, 3, 4);

echo "<br>";

// Five arguments
echo addNumbers(1, 2, 3, 4, 5);

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| addNumbers(2, 3)
| Output: 5
|
| addNumbers(2, 3, 4)
| Output: 9
|
| addNumbers(1, 2, 3, 4, 5)
| Output: 15
|
| The same function handles different
| numbers of parameters.
|
*/

/*
Program Flow
| Step | Action                          |
| ---- | ------------------------------- |
| 1    | Define addNumbers function      |
| 2    | Accept multiple arguments       |
| 3    | Loop through arguments          |
| 4    | Add all values                  |
| 5    | Return total                    |
| 6    | Display output                  |
*/

echo "<pre>
Concept Used
    - Functions
    - Variable-length Arguments
    - Loops
    - Arithmetic Operations
    - Return Statement
    - Function Overloading Concept
</pre>";

?>