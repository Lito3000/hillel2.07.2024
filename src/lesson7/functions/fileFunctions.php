<?php
function write(string $fileName,string $line,bool $append = false):bool {
    return (bool)file_put_contents($fileName,$line,$append ? FILE_APPEND : 0);
};