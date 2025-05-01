<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<h2>Enter a number:</h2>
<form method="post" action="">
  <input type="number" name="number" required>
  <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];

    if ($num > 100) {
        echo '<input type="number" name="number" required>';
    } elseif ($num == 100) {
        echo "<p>The number is exactly 100.</p>";
    } else {
        echo "<p>The number is less than 100.</p>";
    }
}
?>
</body>
</html>