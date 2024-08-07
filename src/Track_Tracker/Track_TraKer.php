<?php

class TrackTraKer
{
    private string $path;
    private $tasks = [];

    /**
     * @throws Exception
     */
    public function __construct(string $path)
    {
        $this->setPath($path);
        $this->getLines();
    }

    /**
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

//    /**
//     * @return string
//     */
//    public function getPath(): string
//    {
//        return $this->path;
//    }

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
     * @throws Exception
     */
    private function write(string $content, bool $append = true): void
    {

        file_put_contents($this->path, $content, $append ? FILE_APPEND : 0);

        $this->getLines();

    }
    /**
     * @throws Exception
     */
    public function addTask(array $array1): void
    {
        $newArr = [uniqid()];
        $generalTask = array_merge($newArr, $array1);

        $this->write(json_encode($generalTask) . PHP_EOL);


    }


    public function getLines(): void
    {
        $lines = file($this->path);

        array_walk($lines, function (&$item) {
            $item = json_decode($item, true);
        });
        $this->tasks = $lines;
    }


    /**
     * @throws Exception
     */
    public function delete(string $id): void
    {

        $users = file($this->path);

        array_walk($users, function (&$item) {
            $item = json_decode($item, true);
        });
//        foreach ($users as $keyUser => $user) {
//            foreach ($user as $task) {
//                if ($task === $id) {
//                    unset($users[$keyUser]);
//                }
//            }
//        }
        foreach ($users as $keyUser => $user) {
            if ($user[0] === $id) {
                    unset($users[$keyUser]);
                }
        }
        $this->usersUpdate($users);
    }

    /**
     * @throws Exception
     */
    public function getTasks(): void
    {

        $users = file($this->path);

        array_walk($users, function (&$item) {
            $item = json_decode($item, true);
        });

        usort($users, fn($a, $b) => $a[2] <=> $b[2]);

        $this->usersUpdate($users);
    }

    /**
     * @throws Exception
     */
    public function completeTask(string $id): void
    {

        $users = file($this->path);

        array_walk($users, function (&$item) {
            $item = json_decode($item, true);
        });
        foreach ($users as $keyUser => $user) {
            foreach ($user as $task) {
                if ($task === $id) {
                    $users[$keyUser][] = 'checked';
                }
            }
        }
        $this->usersUpdate($users);
    }

    /**
     * @throws Exception
     */
    public function usersUpdate(array $users): void
    {
        array_walk($users, function (&$user) {
            $user = json_encode($user);
        });
        $this->write(implode(PHP_EOL, $users), false);
    }
}