<?php
if(!isset($_SESSION['users'])){
    header('location:/');
}
require "views/about.view.php";