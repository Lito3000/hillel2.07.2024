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
  public  function usersImportText(string $file): array|false//получение юзера с файла --------------------------------------
    {
        if (file_exists('../' . $file)) {
            return false;
        }
        $users = file($file, FILE_IGNORE_NEW_LINES);
        array_walk($users, function (&$user) {
            $user = json_decode($user, true);
        });
        return $users;
    }

    public function getLines(): void
    {
        $lines = file($this->path);

        array_walk($lines, function (&$item) {
            $item = json_decode($item, true);
        });
        $this->tasks = $lines;
    }
//  public  function updateTextFile(int $id, array $values, string $file = 'users.txt'): bool
//    {
//        $users = $this->usersImportText($this->path);//берем массив с юзерами и перебираем
//        if (!$users){
//            return false;
//        }
//
//        foreach ($users as $keyUser => $user) {
//            if ($user['id'] === $id) {
//                foreach ($values as $key => $value) {//['email'=>'katedoe@i.com']
//                    $users[$keyUser][$key] = $value;//'email' = 'katedoe@i.com' записали в 'email' именно того ключа
//                }
//            }
//        }
//        return  usersRewrite($users,$file);
//
//    }

    /**
     * @throws Exception
     */
    public function delete(int $id ): void
   {
//       echo $id;

//        $users = $this->getLines();//берем массив с юзерами и перебираем
       $users = file($this->path);

       array_walk($users, function (&$item) {
           $item = json_decode($item, true);
       });

//print_r($users);

        foreach ($users as $keyUser => $user) {



            if ($keyUser === $id) {
                echo 4334;
                unset($users[$keyUser]);
//                print_r($user);
            }
        }
print_r($users);
        $this->usersRewrite($users,$this->path);
    }


    /**
     * @throws Exception
     */
    public  function usersRewrite(array $users, string $file = 'textFile.txt'): void
    {
        array_walk($users, function (&$user) {
            $user = json_encode($user);
        });
        $this->write(implode(PHP_EOL,$users),$file);
    }
}