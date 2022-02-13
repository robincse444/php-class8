<?php
require_once 'vendor/autoload.php';

use \App\classes\Odd;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'odd') {
        include 'pages/odd.php';
    }

} elseif (isset($_POST['oddBtn']))
{
    $odd = new Odd($_POST);
    $result = $odd->index();
    include 'pages/odd.php';
}