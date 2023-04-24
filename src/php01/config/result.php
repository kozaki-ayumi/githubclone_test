<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は" . $name . "です。" . "<br >"; 


$select = htmlspecialchars($_POST['select'], ENT_QUOTES);
print "ご注文の商品は、" . $select . "です。" . "<br >";

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "ご注文の数は、" . $number . "です。" . "<br >";