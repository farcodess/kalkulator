
<?php
include 'calc.php';

$expression = $_POST["expression"];

$calc = new Calc($expression);

try {
    echo $calc->calculator();
} catch (Error $e) {
    echo "Tebisa eui kudu angka " ;
   
}
?>