# Inconsistent Null Handling in PHP Functions

This repository demonstrates a common bug in PHP: inconsistent handling of null values across different functions. The `foo` function correctly handles null values by returning 0, whereas the `bar` function does not handle null values gracefully, resulting in an error. This inconsistency can cause unexpected behavior and errors in applications.

## Bug Description
The `bar` function lacks proper handling for null values as arguments. When either `a` or `b` is null, it results in a TypeError because the multiplication operation (`*`) is undefined for null values.

## Solution
The solution involves adding checks for null values in the `bar` function, similar to the `foo` function, to ensure consistent null handling.