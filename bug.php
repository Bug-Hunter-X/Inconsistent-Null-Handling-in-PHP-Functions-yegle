function foo(a, b) {
  if (a === null || b === null) {
    return 0;
  }
  return a + b;
}

function bar(a, b) {
  if (a === 0 || b === 0) {
    return 0; // Bug: Should also handle null values
  }
  return a * b;
}

console.log(foo(null, 5)); // Output: 0
console.log(foo(5, null)); // Output: 0
console.log(foo(5, 5)); // Output: 10

console.log(bar(0, 5)); // Output: 0
console.log(bar(5, 0)); // Output: 0
console.log(bar(5, 5)); // Output: 25
console.log(bar(null,5)); //Output: Uncaught TypeError: Cannot perform 'multiply' on 'null' and other types