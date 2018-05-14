<?php
class Emotion 
{
    public function feelAngry(){
        include_once __DIR__."/Angry.php";
        $angry = new Angry();
        return $angry->curse();
        
        //如果要改為使用Mad
        //include_once __DIR__."/Mad.php";
        //$mad = new Mad();
        //return $mad->curse();
    }
}

?>