<?php



require __DIR__ . '/vendor/autoload.php';

// adding ability to manage environment variable
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

