<?php

require_once './db.php';
require_once './lib.php';

$idx = $_GET["idx"];

DB::exec("delete from notice where idx = '$idx'");

move('./');