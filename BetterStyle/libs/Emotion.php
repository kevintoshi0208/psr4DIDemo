<?php
namespace libs;
use \libs\Angry;

class Emotion 
{
    private $angry ;
    public function __construct(Angry $angry){
        $this->angry = $angry;
    }

    public function feelAngry(){
       
        return $this->angry->curse();
    }
}

?>