<?php

$username = $_POST['username'];
//echo $username;
$email = $_POST["email"];
$pass = $_POST['pass'];

try{
    $get = $app['db']->query("SELECT * FROM users where email='$email'");
    $exits = $get->fetchAll(PDO::FETCH_OBJ);
//    var_dump($exits);
    if($exits){
        $_SESSION["exit"] = "already exits";
        header("location:/");
    }
    else{
        $insert = $app['db']->query("INSERT INTO users(name,email,password)VALUES('$username','$email','$pass')");
//        var_dump($insert);
        header("location:/home");

        $_SESSION['users']=[
            'email'=>$email
        ];
        unset( $_SESSION["exit"]);
    }
}
catch (Exception $e){
    die($e->getMessage());
}