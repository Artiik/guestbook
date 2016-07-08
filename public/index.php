<?php

require_once '../vendor/autoload.php';

echo 'Hello';

$arr = [1, 'apple', 2, true, 'foo', 'bar'];

var_dump($arr);

dump($arr);

$database = new medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);