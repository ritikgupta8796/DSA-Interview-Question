<?php

/*
|--------------------------------------------------------------------------
| Half Pyramid Number Pattern
|--------------------------------------------------------------------------
|
| This program prints a half pyramid pattern using numbers.
|
| Output:
|
| 1
| 1 2
| 1 2 3
| 1 2 3 4
| 1 2 3 4 5
|
*/

// Total number of rows to print
$numberPrint = 5;

/*
|--------------------------------------------------------------------------
| Outer Loop
|--------------------------------------------------------------------------
|
| Controls the number of rows.
| Starts from 1 and runs until $numberPrint.
|
| Example:
| Row 1
| Row 2
| Row 3
| ...
|
*/
for ($i = 1; $i <= $numberPrint; $i++) {

    /*
    |--------------------------------------------------------------------------
    | Inner Loop
    |--------------------------------------------------------------------------
    |
    | Prints numbers for each row.
    | The loop starts from 1 and runs until the current row number ($i).
    |
    | Example:
    | Row 1 -> 1
    | Row 2 -> 1 2
    | Row 3 -> 1 2 3
    |
    */
    for ($j = 1; $j <= $i; $j++) {

        // Print the current number
        echo " " . $j . " ";
    }

    /*
    |--------------------------------------------------------------------------
    | Move to Next Line
    |--------------------------------------------------------------------------
    |
    | After printing all numbers for the current row,
    | break the line using <br>.
    |
    */
    echo "<br>";
}

?>