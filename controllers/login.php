<?php
if(isset($_SESSION['users'])){
    header('location:/home');
}
require "views/login.view.php";