<?php 
if (!isset($_SESSION)) {
    session_start();
}
$init = require_once '../app/init.php';


$app = new App();
