function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

//This will cause an error if the array is empty
let numbers = [];
let sum = calculateSum(numbers);
console.log(sum); //Outputs 0, which is not an error, but may not be the expected result if the expectation is an error

//This will cause a TypeError if the input is not an array
let notAnArray = "hello";
let sum2 = calculateSum(notAnArray); // Throws a TypeError
console.log(sum2)