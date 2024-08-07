<?php

class Track_TraKer
{
    private string $path;
    public array $tasks = [];

    /**
     * @throws Exception
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @throws Exception
     */
    public function write(string $content, bool $append = true): void
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
    public function delete(string $id ): void
   {

       $users = file($this->path);

       array_walk($users, function (&$item) {
           $item = json_decode($item, true);
       });


        foreach ($users as $keyUser => $user) {
//           echo  $user[$keyUser];
            foreach ($user as $key =>$task) {
//                echo $key;
//                foreach ($task as $keyTask => $task3) {
//                    echo $task3[$keyTask];
//                }

//                print_r($task[$key][$id]);
//                print_r($task[$id]);
                if ($task === $id) {
                    echo 555;
//                    exit;
//                    unset($task[$key]);
                    unset($users[$keyUser]);
                }
            }


        }

        $this->usersRewrite($users);
    }


    /**
     * @throws Exception
     */
    public  function usersRewrite(array $users): void
    {
        array_walk($users, function (&$user) {
            $user = json_encode($user);
        });
        $this->write(implode(PHP_EOL,$users),false);
    }
}