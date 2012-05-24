<?php
session_start();
$_SESSION['user'] = '';
define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

include(ROOT."/model/class.conexion.php");
include(ROOT."/view/class.view.php");
include(ROOT."/view/class.table.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
