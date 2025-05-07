<?php
    $arr = array("PHP", "Java", "Python");
    echo "<b>Original array: </b><br>";
    print_r($arr); // Printing array
    echo "<br>";
    
    // Add element to end of array
    array_push($arr, "C++");        
    echo "<br>1. Added: ";
    print_r($arr);                
    
    // Remove last element of array
    array_pop($arr);                 
    echo "<br>2. Removed: ";
    print_r($arr);                
    
    // Add element to start of array
    array_unshift($arr, "HTML"); 
    echo "<br>3. Added at start: ";
    print_r($arr);       

    // Remove first element of array
    array_shift($arr);          
    echo "<br>4. Removed first: ";
    print_r($arr);               

    // Count elements in array
    echo "<br>5. Original Array: ";
    print_r($arr);
    echo "<br>Count is: " . count($arr);

    // Sort the array
    sort($arr);                      
    echo "<br>6. Sorted: ";
    print_r($arr);

    // Reverse the array
    $reversed = array_reverse($arr); 
    echo "<br>7. Reversed: ";
    print_r($reversed);

    // Check if a value exists in the array
    $exists = in_array("Java", $arr) ? "Yes" : "No";
    echo "<br>8. Does 'Java' exist in the array? " . $exists;

    // Get unique values from the array
    $unique = array_unique($arr);
    echo "<br>9. Unique Values: ";
    print_r($unique);

    // Merge with another array
    $newArr = array("Go", "Rust");
    $merged = array_merge($arr, $newArr);
    echo "<br>10. Merged Array: ";
    print_r($merged);

    // Slice the array
    $sliced = array_slice($arr, 1, 3);
    // here get 1 elements starting from index 1
    echo "<br>11. Sliced Array: ";
    print_r($sliced);

    //array sum
    $numbers = array(1, 2, 3, 4, 5);
    $sum = array_sum($numbers);
    echo "<br>12. Sum of numbers: " . $sum;

    //max element
    $max = max($numbers);
    echo "<br>13. Max element: " . $max;

    //min element   
    $min = min($numbers);
    echo "<br>14. Min element: " . $min;

?>
