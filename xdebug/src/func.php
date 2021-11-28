<?php

echo 'Hello Profiling' . PHP_EOL;

whatsname('Hamed So');

function whatsname(string $name) : string
{
    sleep(3);
    return $name;
}