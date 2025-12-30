<?php

require_once './db.php';
require_once './lib.php';

$file = $_POST['file'];
$name = $_POST['name'];
$des = $_POST['des'];
$price = $_POST['price'];
$cate = $_POST['cate'];
$idx = $_GET["idx"];

DB::exec("update item set `title`='$name', `des`='$des', `price`='$price', `cate`='$cate' where idx = '$idx'");

move('./');