```php
function my_function($param1, $param2 = null) {
  if ($param2 === null) {
    // Handle the case where $param2 is not provided
    return $param1 * 2; 
  } else {
    return $param1 + $param2;
  }
}

// The following calls will produce unexpected results due to type juggling
$result1 = my_function(10);
$result2 = my_function(10, "0");
$result3 = my_function(10, "10");
echo "Result 1: " . $result1 . "\n"; // Output: 20 (expected)
echo "Result 2: " . $result2 . "\n"; // Output: 10 (unexpected)
echo "Result 3: " . $result3 . "\n"; // Output: 20 (unexpected)
```