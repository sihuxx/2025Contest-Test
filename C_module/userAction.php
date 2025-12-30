<?php

require_once './db.php';
require_once './lib.php';


$type = $_POST["type"];

if ($type == "reg") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $psw = $_POST["psw"];
    $email = $_POST["email"];
    
    if(DB::fetch("select * from user where id = '$id'")) {
        alert("이미 있는 아이디입니다");
    } else {
        [$salt, $h_psw] = hashPsw($psw);        
        
        DB::exec("insert into user(id, psw, name, email, salt) values ('$id', '$h_psw', '$name', '$email', '$salt')");
    }
    move('index.php');
} else {
    $id = $_POST["id"];
    $psw = $_POST["psw"];

    $user = DB::fetch("select * from user where id = '$id'");
    
    if(!$user) {
        alert("아이디가 일치하지 않습니다");
    } else {
        $input_psw = hash("sha256", $user->salt . $psw);
        
        if($input_psw != $user->psw) {
            alert("비밀번호가 일치하지 않습니다");
        } else {
            $_SESSION["ss"] = $user;
            alert("로그인 성공");
            move('index.php');
        }
    }
}