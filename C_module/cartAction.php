<?php

require_once './db.php';
require_once './lib.php';

$itemId = $_GET["idx"];
$user = $_SESSION["ss"] ?? false;

if($user) {
   if(DB::fetch("select * from cart where userId = '$user->id' and itemId = '$itemId'")) {
      DB::exec("update cart set count = count + 1 where userId = '$userId' and itemId = '$itemId'");
   } else {
      DB::exec("insert into cart(itemId, userId) values('$itemId', '$user->id'");
   }
} else {
    alert("로그인이 필요합니다");
} 

move('./index.php');