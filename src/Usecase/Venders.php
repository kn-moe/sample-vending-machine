<?php

namespace src\Usecase;
use src\Usecase\IVenders;

class Venders implements IVenders{
    function __construct(){

    }

    public function buy(){
        return "test";
    }
}