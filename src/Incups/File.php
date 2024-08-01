<?php

class File
{
    private string $path;

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
        $result = file_put_contents($this->getPath(), $content, $append ? FILE_APPEND : 0);
        if ($result === false) {
            throw new Exception("Error writing to file");
        }
    }

    /**
     * @throws Exception
     */
    public function getLines(): array
    {
        $lines = file($this->getPath());
        if ($lines === false) {
            throw new Exception("Error writing to line");
        }
        return $lines;
    }

//    function userCreate(array $user, string $path): bool
//    {
//        if ([] === $user) {
//            return false;
//        }
//        if (!key_exists('id', $user)) {
//            return false;
//        }
//        return $this->write($path, json_encode($user) . PHP_EOL, append: true);
//
//    }
    /**
     * @throws Exception
     */
    public function getLastLine(): string
    {
        $lines = $this->getLines();
        return end($lines);
    }
}