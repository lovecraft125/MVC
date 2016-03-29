<?php
//stavlja slesh ili backslash u zavisnosti od putanje
//Putanja do direktorijuma
define("PATH", $_SERVER['DOCUMENT_ROOT']."/Design_Patterns/MVC/");
//Parametri za konekciju sa bazom
define("DB_HOST", "localhost");
define("DB_USER", "toni");
define("DB_PASS", "vezbaphp12");
define("DB_NAME", "vezba");

require_once 'helper.php';

