<?php

// Start the PHP session system
session_start();
define("SYSTEM", 'system');

// If there is a System session, use that. Otherwise, create one
if(!isset($_SESSION[SYSTEM])) {
    $_SESSION[SYSTEM] = new Enigma\System();
}

$system = $_SESSION[SYSTEM];
