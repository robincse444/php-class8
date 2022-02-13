<?php
require_once 'vendor/autoload.php';

use \App\classes\Calculator;
use \App\classes\Prime;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home') {
        include 'pages/home.php';
    }

} elseif (isset($_POST['submit']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';
}
if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'prime') {
        include 'pages/prime.php';
    }

}
elseif (isset($_POST['prime']))
{
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';
}