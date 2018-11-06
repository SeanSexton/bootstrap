<?php
/**
 * Created by PhpStorm.
 * User: seansexton
 * Date: 04/10/2018
 * Time: 21:54
 */

include '/Applications/XAMPP/xamppfiles/htdocs/bootstrap/includes/calc.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];


$calculator = new Calc($num1, $num2, $cal);
echo $calculator->calMethod();