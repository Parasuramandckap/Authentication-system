<?php
if(!isset($_SESSION['users'])){
    header('location:/');
}
require "views/home.view.php";