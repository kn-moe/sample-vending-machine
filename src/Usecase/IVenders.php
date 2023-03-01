<?php

namespace src\Usecase;

interface IVenders{
    public function buy(array $coins,string $menu);
}