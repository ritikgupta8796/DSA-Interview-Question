<?php
/* Print the star (inverted star pattern)

*****
****
***
**
*

*/


// Total number of rows to print
$starPrint = 5;

/*
|--------------------------------------------------------------------------
| Outer Loop
|--------------------------------------------------------------------------
| Controls how many rows will be printed.
| Starts from 1 and runs until $starPrint.
|
| Example:
| Row 1
| Row 2
| Row 3
| ...
*/
for ($i = 1; $i <= $starPrint; $i++) {

    /*
    |--------------------------------------------------------------------------
    | Inner Loop
    |--------------------------------------------------------------------------
    | Prints stars (*) in decreasing order.
    |
    | Formula:
    | $starPrint - $i + 1
    |
    | Explanation:
    | Row 1 -> 5 stars
    | Row 2 -> 4 stars
    | Row 3 -> 3 stars
    | Row 4 -> 2 stars
    | Row 5 -> 1 star
    */
    for ($j = 1; $j <= $starPrint - $i + 1; $j++) {

        // Print one star
        echo " * ";
    }

    /*
    |--------------------------------------------------------------------------
    | Move to Next Line
    |--------------------------------------------------------------------------
    | After printing all stars for the current row,
    | break the line using <br>.
    */
    echo "<br>";
}

?>