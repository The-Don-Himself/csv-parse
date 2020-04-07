<?php

use Symfony\Component\Console\Application;
use TheDonHimself\CsvParse\Commands\ParseCommand;

$autoloadFiles = array(__DIR__ . '/../vendor/autoload.php',
                       __DIR__ . '/../../../autoload.php');

foreach ($autoloadFiles as $autoloadFile) {
    if (file_exists($autoloadFile)) {
        require_once $autoloadFile;
    }
}

$application = new Application();

$application->add(new ParseCommand());

$application->run();
