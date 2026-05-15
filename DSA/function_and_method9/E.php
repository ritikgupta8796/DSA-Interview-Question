<?php

/*
|--------------------------------------------------------------------------
| Call By Value
|--------------------------------------------------------------------------
|
| This program demonstrates the concept of
| Call By Value in PHP.
|
| In Call By Value, a copy of the variable
| is passed to the function.
|
| Any changes made inside the function
| do not affect the original variable.
|
*/

function returnVal(int $num2) {

    // Change local copy value
    $num2 = 15;

    // Return updated value
    return $num2;
}

// Original Variable
$num2 = 5;

// Function Call
echo "Returned Value : " . returnVal($num2);

echo "<br>";

// Original value remains unchanged
echo "Original Value : " . $num2;

/*
|--------------------------------------------------------------------------
| Explanation
|--------------------------------------------------------------------------
|
| Original Value:
|   5
|
| Inside Function:
|   Value changed to 15
|
| Outside Function:
|   Original value remains 5
|
| Reason:
|   PHP passes a copy of the variable
|   in Call By Value.
|
*/

/*
Program Flow
| Step | Action                         |
| ---- | ------------------------------ |
| 1    | Create variable                |
| 2    | Pass variable to function      |
| 3    | Copy value inside function     |
| 4    | Modify copied value            |
| 5    | Return modified value          |
| 6    | Original value remains same    |
*/

echo "<pre>
Concept Used
    - Functions
    - Call By Value
    - Parameters
    - Arguments
    - Variable Scope
    - Return Statement
</pre>";

?>