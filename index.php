<!DOCTYPE html>
<html>

<head>
    <title>Future Value Calculator</title>
</head>

<body>

    <h2>Future Value Calculator</h2>

    <form action="calculate.php" method="POST">

        <label>Present Value (PV):</label>
        <input type="number" name="pv" step="any" required>
        <br><br>

        <label>Annual Interest Rate (r):</label>
        <input type="number" name="rate" step="any" required> %
        <br><br>

        <label>Number of Periods (n):</label>
        <input type="number" name="years" step="any" required>
        <br><br>

        <button type="submit">Calculate Future Value</button>

    </form>

</body>

</html>