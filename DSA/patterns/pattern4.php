<?php

/*
|--------------------------------------------------------------------------
| Print Character Pattern
|--------------------------------------------------------------------------
|
| This program prints a half pyramid pattern using characters.
|
| Output:
|
| A
| B C
| D E F
| G H I J
| K L M N O
|
*/

// Total number of rows to print
$charLine = 5;

// Starting character
$charStart = 'A';

/*
|--------------------------------------------------------------------------
| Outer Loop
|--------------------------------------------------------------------------
|
| Controls the number of rows.
| Starts from 1 and runs until $charLine.
|
| Example:
| Row 1
| Row 2
| Row 3
| ...
|
*/
for($i = 1; $i <= $charLine; $i++) {

    /*
    |--------------------------------------------------------------------------
    | Inner Loop
    |--------------------------------------------------------------------------
    |
    | Prints characters for each row.
    | The loop runs from 1 until the current row number ($i).
    |
    | Example:
    | Row 1 -> A
    | Row 2 -> B C
    | Row 3 -> D E F
    |
    */
    for($j = 1; $j <= $i; $j++) {

        // Print current character
        echo " " . $charStart . " ";

        // Move to next character
        $charStart++;
    }

    /*
    |--------------------------------------------------------------------------
    | Move to Next Line
    |--------------------------------------------------------------------------
    |
    | After printing all characters for the current row,
    | break the line using <br>.
    |
    */
    echo "<br>";
}

?>