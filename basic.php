<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: $length\n";
echo "Width: $width\n";
echo "Area: $area\n";
echo "Perimeter: $perimeter\n";
?>

<br>
<?php
$amount = 1000;
$vat = ($amount * 15) / 100;
$total = $amount + $vat;

echo "VAT: $vat<br>";
echo "Total (with VAT): $total";
?>
<br>

<?php
$number = 7;

if ($number % 2 == 0) {
    echo "$number is Even";
} else {
    echo "$number is Odd";
}
?>
<br>

<?php
$a = 12;
$b = 45;
$c = 30;

if ($a >= $b && $a >= $c) {
    echo "Largest: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest: $b";
} else {
    echo "Largest: $c";
}
?>

<br>

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
?>
<br>

<?php
$numbers = [12, 45, 7, 23, 56, 89, 34];
$search = 23;
$found = false;

foreach ($numbers as $index => $value) {
    if ($value == $search) {
        echo "Found $search at index $index";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "$search not found in the array";
}
?>

<br>

<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<br>
<?php
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . ' ';
    }
    echo '<br>';
}
?>

<br>
<?php
$rows = 3;
$letter = 65;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr($letter) . ' ';
        $letter++;
    }
    echo '<br>';
}
?>