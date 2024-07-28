<?php

function lastOpen(string $file):string
{
    $fileOpen = fopen($file, 'r');
    $lastfile = fread($fileOpen, filesize('test.txt'));
    $lasr = explode("\n", $lastfile);
    $lastEle = $lasr[count($lasr) - 2];
    fclose($fileOpen);
    return $lastEle;
}