<?php



public class Message
{
    public string $name;
     
    public function setName(string $name):void
    {
     this->$name = $name;
    }

    public function getName(string $name):void
    {
       return this->$name;
    }
    public function sayHello(string $name):void
    {
        echo "hello,my name is".$name;
    }
}

$message=new Message();
$message->setName(name:'Alex');
$message->sayHello();



?>