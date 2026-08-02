<?php
$principal = 5000;
$rate = 5;
$time = 2;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal: $principal<br>";
echo "Rate: $rate%<br>";
echo "Time: $time years<br>";
echo "Simple Interest: $simpleInterest";
?><br>

<br>

<?php
$number = 17;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a Prime number";
} else {
    echo "$number is not a Prime number";
}
?><br>


<br>
<?php
$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial = $factorial * $i;
}

echo "Factorial of $number is $factorial";
?><br>

<br>
<?php
$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($numbers);

foreach ($numbers as $value) {
    $sum = $sum + $value;
}

$average = $sum / $count;

echo "Sum: $sum<br>";
echo "Average: $average";
?><br>


<br>
<?php
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}
?>