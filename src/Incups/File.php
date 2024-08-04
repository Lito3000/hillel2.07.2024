<?php

class File
{
    private string $path;
    public array $arr = [];

    /**
     * @throws Exception
     */
    public function __construct(string $path)
    {
        $this->setPath($path);
    }


    /**
     * @param string $path
     * @throws Exception
     */
    public function setPath(string $path): void
    {
        if (!file_exists($path)) {
            throw new Exception("File does not exist", 477);
        }
        $this->validatePath($path);
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @throws Exception
     */
    private function validatePath(string $path): void
    {
        $extensions = FileType::values();
        $extension = $this->getPathExtention($path);
        if (!in_array($extension, $extensions)) {
            throw new Exception("Invalid extensions", 657);
        }
    }

    private function getPathExtention($path): string
    {

        return pathinfo($path, PATHINFO_EXTENSION);
    }

    /**
     * @param string $content
     * @param bool $append
     * @return void
     * @throws Exception
     */
    public function write(string $content, bool $append = true): void
    {
//echo $content;
        $result = file_put_contents($this->getPath(), $content, $append ? FILE_APPEND : 0);
//        echo $result;
        if ($result === false) {
            throw new Exception("Error writing to file");
        }
        $this->getLines();

    }

    /**
     * @throws Exception
     */
    public function getLines(): void
    {
        $lines = file($this->getPath());
        if ($lines === false) {
            throw new Exception("Error writing to line");
        }
//        print_r($lines);
        $this->arr = $lines;
//        return $lines;
    }

    /**
     * @throws Exception
     */
//    public function getLastLine(): void
//    {
//        $lines = $this->getLines();
////        $end = end($lines);
//        $this->arr= $lines;
////        return end($lines);
//    }

    public function addTaskUser(array $array1): void
    {
//       $array1;
        foreach ($array1 as $kay =>&$user){
    $user[$kay]=uniqid();
}
//        $newArr= uniqid();
//        print_r($task2);
//       $array1=array_push( $array1,$newArr);
//        $array1;
//
        $this->write(json_encode($array1) . PHP_EOL);


    }
}