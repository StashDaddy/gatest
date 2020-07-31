<?php

echo "here" . PHP_EOL;

try {
    throw new Exception("This is an exception");
} catch (\Throwable $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $result = eval("2*'7'");
} catch (\Throwable $e) {
    echo $e->getMessage() . PHP_EOL;
}

echo "done" . PHP_EOL;

