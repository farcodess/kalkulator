<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">Conbin<span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" class="button" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a  class="nav-link" href="calc.php">Calcu<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <h1>Convert biner </h1>
    <form action="index.php" method="post">
        <label for="binary">Binary:</label>
        <input type="text" id="binary" name="binary" placeholder="Enter binary number">
        <button type="submit" name="convert-binary">Convert ke Decimal</button>
    </form>

    <form action="index.php" method="post">
        <label for="decimal">Decimal:</label>
        <input type="text" id="decimal" name="decimal" placeholder="Enter decimal number">
        <button type="submit" name="convert-decimal">Convert ke biner</button>
    </form>
</body>
</html>
<?php

class Converter {
    public function binaryToDecimal($binary) {
        return bindec($binary);
    }

    public function decimalToBinary($decimal) {
        return decbin($decimal);
    }
}

if (isset($_POST['convert-binary'])) {
    $converter = new Converter();
    $binary = $_POST['binary'];
    $decimal = $converter->binaryToDecimal($binary);
    echo "<p>Binary: {$binary}<br>Decimal: {$decimal}</p>";
}

if (isset($_POST['convert-decimal'])) {
    $converter = new Converter();
    $decimal = $_POST['decimal'];
    $binary = $converter->decimalToBinary($decimal);
    echo "<p>Decimal: {$decimal}<br>Binary: {$binary}</p>";
}

?>