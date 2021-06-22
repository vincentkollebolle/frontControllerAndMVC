<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('var/log/my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
echo "log done ! ";