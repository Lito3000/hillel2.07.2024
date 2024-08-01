<?php

class ToDoList
{
    private array $ark =[];

    public function __set($name, $value)
    {

            $this->ark[$name]= $value;//в массив $task сохрани свойство name

//            file_put_contents($fileName,$line,$append ? FILE_APPEND : 0);

    }

    public function __get($name)
    {
//        isset($this->task[$name]) ? $this->task[$name] : null;
        return $this->ark[$name]?? null;
    }

    public function __isset($name){
        return isset($this->ark[$name]);
    }
public function __unset($name){
        unset($this->ark[$name]);
}
public function write($json_encode)
{

}
}

