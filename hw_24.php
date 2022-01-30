<?php

interface canSpeak
{
    function speak();
}

abstract class whoSpeak implements canSpeak
{
    abstract protected function Who();

    abstract protected function say();

    function speak()
    {
        echo $this->Who()." says ". $this->say();
    }
}

class Mammals extends whoSpeak
{
    protected function Who()
    {
        return get_class($this);
    }

    protected function say()
    {
        return "Bugaga!";
    }
}

class Animal extends whoSpeak
{
    protected function Who()
    {
        return get_class($this);
    }

    protected function say()
    {
        return "Meat!";
    }
}

class Anthropoid extends whoSpeak
{
    protected function Who()
    {
        return get_class($this);
    }

    protected function say()
    {
        return "Huulooo!";
    }
}

class Human extends whoSpeak
{
    protected function Who()
    {
        return get_class($this);
    }

    protected function say()
    {
        return "Hello!";
    }
}

class Speaker
{
    private $who;

    function whoIs($who){
        if(!is_object($who)) return false;
        $this->who = $who;
        return $who;
    }

    function speak(){
        $this->who->speak();
    }
}

$human = new Human();

$I = new Speaker();

$I->whoIs($human)->speak();


