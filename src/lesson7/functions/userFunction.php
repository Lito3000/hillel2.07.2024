<?php

function lastOpen1($file): string
{
    $arr = [];
    for ($i = 0; ($line = fgets($file)) !== false; $i++) {
        $arr[] = $line;
    }
    return $arr[count($arr) - 1];

}

function lastOpen2(string $file): string
{
    $fileOpen = fopen($file, 'r');
    $lastfile = fread($fileOpen, filesize($file));
    $lasr = explode("\n", $lastfile);
    $lastEle = $lasr[count($lasr) - 2];
    fclose($fileOpen);
    return $lastEle;
}