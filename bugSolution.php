<?php
function calculateSum(array $numbers): int
{
  if (empty($numbers)) {
    throw new InvalidArgumentException('The input array cannot be empty.');
  }
  return array_sum($numbers);
}

//Improved error handling
try {
  $numbers = [];
  $sum = calculateSum($numbers); 
  echo "Sum: " . $sum;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}

//Improved error handling
try {
  $notAnArray = "hello";
  $sum2 = calculateSum($notAnArray); // Throws a TypeError
  echo "Sum: " . $sum2;
} catch (TypeError $e) {
  echo "Error: " . $e->getMessage();
}
?>