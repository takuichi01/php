<?php

$name = htmlspecialchars($_POST['username'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);

echo $name;
echo "<br />";
echo $product;
echo "<br />";
echo $num;

