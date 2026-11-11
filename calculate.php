<?php

$pv = $_POST['pv'];
$rate = $_POST['rate'] / 100;
$years = $_POST['years'];

if ($pv <= 0 || $rate <= 0 || $years <= 0) {
    echo "Please enter positive values.";
} else {

    $fv = $pv * pow((1 + $rate), $years);

    echo "<h2>Future Value Results</h2>";
    echo "Present Value: $" . number_format($pv, 2) . "<br>";
    echo "Annual Interest Rate: " . ($rate * 100) . "%<br>";
    echo "Number of Periods: " . $years . "<br>";
    echo "<h3>Future Value (FV): $" . number_format($fv, 2) . "</h3>";
}

?>

<br>
<a href="index.php">Calculate Again</a>