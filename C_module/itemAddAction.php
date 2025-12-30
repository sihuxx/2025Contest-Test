<?php

require_once './db.php';
require_once './lib.php';

$file = $_POST['file'];
$name = $_POST['name'];
$des = $_POST['des'];
$price = $_POST['price'];
$cate = $_POST['cate'];

DB::exec("insert into item(title, price, des, img, cate) values('$name', '$price', '$des', '../images/$file', '$cate')");

move('./');