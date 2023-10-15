<?php
function dateDifferenceInDays($date1, $date2) {

    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);

    $difference = abs($timestamp2 - $timestamp1);

    $daysDifference = floor($difference / (60 * 60 * 24));

    return $daysDifference;
}

$date1 = "2023-10-01";
$date2 = "2023-10-10";

$daysDifference = dateDifferenceInDays($date1, $date2);
echo "The difference between the two dates is $daysDifference days.";





function objectToArray($obj) {
    $result = [];
    foreach ($obj as $key => $value) {
        $result[] = [$key, $value];
    }
    return $result;
}


$myObject = [
    "a" => 1,
    "b" => 2,
];

$myArray = objectToArray($myObject);

print_r($myArray);



function reverseArray($arr) {
    return array_reverse($arr);
}


$inputArray = [1, 2, 3, 4];
$reversedArray = reverseArray($inputArray);

print_r($reversedArray);




function getMultipleValues() {
    $value1 = 10;
    $value2 = 20;
    $value3 = 30;

    return ["result1" => $value1, "result2" => $value2, "result3" => $value3];
}


$results = getMultipleValues();

echo "Value 1: " . $results["result1"] . "\n";
echo "Value 2: " . $results["result2"] . "\n";
echo "Value 3: " . $results["result3"] . "\n";

interface Calculator {
    public function sum($num1, $num2);
    public function difference($num1, $num2);
    public function product($num1, $num2);
    public function division($num1, $num2);
}

class BasicCalculator implements Calculator {
    public function sum($num1, $num2) {
        return $num1 + $num2;
    }

    public function difference($num1, $num2) {
        return $num1 - $num2;
    }

    public function product($num1, $num2) {
        return $num1 * $num2;
    }

    public function division($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Division by zero is not allowed.";
        }
    }
}


$calculator = new BasicCalculator();

$num1 = 10;
$num2 = 5;

$sum = $calculator->sum($num1, $num2);
$difference = $calculator->difference($num1, $num2);
$product = $calculator->product($num1, $num2);
$division = $calculator->division($num1, $num2);

echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
echo "Division: $division\n";



function getMaxValueWithIndex($numbers) {
    if (empty($numbers)) {
        return null; 
    }

    $maxValue = $numbers[0]; 
    $maxIndex = 0; 
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $maxValue) {
            $maxValue = $numbers[$i];
            $maxIndex = $i;
        }
    }

    return ["maxValue" => $maxValue, "maxIndex" => $maxIndex];
}


$numbers = [10, 5, 15, 25, 20];
$result = getMaxValueWithIndex($numbers);

if ($result !== null) {
    echo "Maximum value is " . $result["maxValue"] . " at index " . $result["maxIndex"];
} else {
    echo "The array is empty.";
}

function sumObjectValues($obj) {
    $sum = 0;
    foreach ($obj as $key => $value) {
        if (is_numeric($value)) {
            $sum += $value;
        }
    }
    return $sum;
}


$obj = (object) [
    "field1" => 10,
    "field2" => "not a number",
    "field3" => 20,
];

$result = sumObjectValues($obj);
echo "Sum of numeric values: " . $result; 


