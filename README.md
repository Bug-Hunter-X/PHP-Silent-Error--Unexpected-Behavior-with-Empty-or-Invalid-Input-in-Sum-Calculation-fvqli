# PHP Silent Error: Unexpected Behavior with Empty or Invalid Input in Sum Calculation

This repository demonstrates a common, yet often overlooked, error in PHP: the silent failure of a function when it receives unexpected input, such as an empty array or a non-array value.  The `calculateSum` function is designed to sum an array of numbers, but does not handle cases where the array is empty or the input is not an array.

## Bug

The `bug.php` file shows the function and its problematic usage. The function itself returns 0 for empty arrays which is not necessarily an error but may be unexpected by a developer, it doesn't explicitly check for invalid inputs.  This lack of error handling can cause unexpected behavior or crashes, often silently in production environments.

## Solution

The `bugSolution.php` file demonstrates a more robust version of the function.  It includes explicit checks for empty arrays and non-array inputs, using exceptions to provide helpful error messages to the caller.

This example highlights the importance of defensive programming in PHP and the handling of edge cases to prevent silent errors.