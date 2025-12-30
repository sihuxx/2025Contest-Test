<?php

require_once './db.php';
require_once './lib.php';

$name = $_POST['name'];
$type = $_POST['type'];

DB::exec("insert into notice(title, type) values('$name', '$type')");

move('./');