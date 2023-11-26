<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$number = isset($_GET['number']) ? intval($_GET['number']) : 5;
?>

<form method="GET">
    <label for="number">Enter a number: </label>
    <input type="number" name="number" value="<?php echo $number; ?>">
    <input type="submit" value="Generate Table">
</form>

<h2>Multiplication Table for <?php echo $number; ?></h2>
<table>
    <tr>
        <th>Multiplicand</th>
        <th>Multiplier</th>
        <th>Product</th>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $product = $number * $i;
        echo "<tr>
                <td>$number</td>
                <td>$i</td>
                <td>$product</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>