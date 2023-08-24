<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

try {
    $get = $app['db']->query("SELECT * FROM users where email='$email'and password='$pass'");
    $exits = $get->fetchAll(PDO::FETCH_OBJ);
    var_dump($exits);
    if($exits){
        header("location:/home");
        $_SESSION['users'] = [
            'email'=>$email
        ];
        unset($_SESSION["password-not-match"]);
    }
    else{
        $_SESSION["password-not-match"] = "not matching";

        header("location:/loginpage");
    }
}
catch (PDOException $e){
    die($e->getMessage());
}