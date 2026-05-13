<?php 
/*
Print this star (nested loop start pattern)
*
**
***
****
*****
*/


// Total number of rows to print
$starPrint = 5;
/*
|--------------------------------------------------------------------------
| Outer Loop
|--------------------------------------------------------------------------
| Controls the number of rows.
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
    | Prints stars (*) for each row.
    | The number of stars depends on the current row number ($i).
    |
    | Example:
    | Row 1 -> 1 star
    | Row 2 -> 2 stars
    | Row 3 -> 3 stars
    */
    for ($j = 1; $j <= $i; $j++) {

        // Print one star
        echo "*";
    }
    /*
    |--------------------------------------------------------------------------
    | Move to Next Line
    |--------------------------------------------------------------------------
    | After all stars of the current row are printed,
    | break the line using <br>.
    */
    echo "<br>";
}

?>