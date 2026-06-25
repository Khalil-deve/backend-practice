<?php

// ==========================================
// MERGED PHP LAB 07 TASKS
// ==========================================

/* ==========================================
   TASK 1 
   ========================================== */
echo "<h1>Task 1</h1>";
//Integer Concept
$x = 10;
$y = 20;
$z = $x + $y;
echo "The sum of two integer: $x + $y : $z";
echo "<br>";

//String Concept
$str1 = "Muhammad";
$str2= "Khall";
echo "My name is $str1 $str2";
echo "<br>";

//Float Concept
$x = 10.5;
$y = 20.5;
$z = $x + $y;
echo "The sum of two float: $x + $y : $z";
echo "<br>";

//Constant Concept
define("x", 10);
define("y", 20);
define("z", x + y);
echo "The sum of two constant: x + y : z";
echo "<br>";

/* ==========================================
   TASK 2 
   ========================================== */
echo "<h1>Task 2</h1>";
$str = "I am string to be tested";

echo "<h2>Orignal String:</h2> $str";
echo "<br>";

// reverse the string
echo "<h2>reverse string:</h2>".strrev($str)."<br>";

//count number of words
echo "<h2>total words in the strring: </h2>".str_word_count($str);
echo "<br>";

// find the position of words "be"
echo "<h2>the postion of be words is: </h2>".strpos($str, "be");
echo "<br>";

/* ==========================================
   TASK 3 
   ========================================== */
echo "<h1>Task 3</h1>";
function add($num1, $num2){
    return $num1 + $num2;
}

echo "the sum of the two variable: ".add(10, 20);

/* ==========================================
   TASK 4 
   ========================================== */
echo "<h1>Task 4</h1>";
$n = 6;

// Upper part
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

// Lower part
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

/* ==========================================
   TASK 5 
   ========================================== */
echo "<h1>Task 5</h1>";
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
$name = "Khalil";
$depart = "CSE";
$address = "Karak";
?>

<table>
    <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Address</th>
    </tr>
    <tr>
        <td> <?php echo $name; ?> </td>
        <td> <?php echo $depart; ?> </td>
        <td> <?php echo $address; ?> </td>
    </tr>
</table>

</body>
</html>
<?php
/* ==========================================
   TASK 6 
   ========================================== */
echo "<h1>Task 6</h1>";
$list = [1, 1, 2, 2, 3, 4, 5, 5];

// remove duplicate values
$list = array_unique($list);

// print the list
print_r($list);

/* ==========================================
   TASK 7 
   ========================================== */
echo "<h1>Task 7</h1>";
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$sum = 0;

echo "Prime Numbers less than 100:<br>";

for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        echo $i . ", ";
        $sum += $i;
    }
}

echo "<br><br>Sum = " . $sum;

/* ==========================================
   TASK 8 
   ========================================== */
echo "<h1>Task 8</h1>";
$student = [
    "name" => "Khalil",
    "department" => "CSE",
    "address" => "Karak"
];

echo "Name: " . $student["name"] . "<br>";
echo "Department: " . $student["department"] . "<br>";
echo "Address: " . $student["address"] . "<br>";

/* ==========================================
   TASK 9 
   ========================================== */
echo "<h1>Task 9</h1>";
function sumDigits($num) {
    $sum = 0;

    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }

    return $sum;
}

echo "The sum of a 12345 is: ".sumDigits(12345);

/* ==========================================
   TASK 10 
   ========================================== */
echo "<h1>Task 10</h1>";
$cities = [
    "Pakistan", "England", "India", "America", "Dubai",
    "Saudi Arabia", "Mexico", "Turkey", "Holland",
    "Karachi", "Peshawar", "Lahore"
];

// Print with commas
echo implode(", ", $cities);

echo "<br><br>";

// Sort and print as unordered list
sort($cities);

echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

// Add new cities
array_push($cities, "Quetta", "Faisalabad", "Multan");

// Sort again
sort($cities);

// Print again
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

