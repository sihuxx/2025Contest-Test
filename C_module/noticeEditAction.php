<?php

require_once './db.php';
require_once './lib.php';


$name = $_POST['name'];
$type = $_POST['type'];
$idx = $_GET["idx"];

DB::exec("update notice set `title`='$name', type='$type' where idx = '$idx'");

move('./');