```php
function my_function($param1, $param2 = null) {
  if ($param2 === null) {
    return $param1 * 2;
  } else {
    //Explicit type checking and conversion for robustness
    if (!is_numeric($param2)){
        trigger_error('param2 must be numeric', E_USER_WARNING);
        return null; //Or handle appropriately
    }
    return $param1 + (int)$param2; // Type cast for safety
  }
}

// Corrected calls demonstrating improved behavior
$result1 = my_function(10);
echo "Result 1: " . $result1 . "\n"; // Output: 20
$result2 = my_function(10, 0); //Explicit 0
echo "Result 2: " . $result2 . "\n"; // Output: 10
$result3 = my_function(10, 10);
echo "Result 3: " . $result3 . "\n"; // Output: 20
$result4 = my_function(10, "abc"); //Demonstrates error handling
echo "Result 4: " . $result4 . "\n"; //Output:  Warning and null
```