<?php

require_once(__DIR__ . "/../../vendor/autoload.php");
require_once(__DIR__ . "/../../src/Model/Coins.php");

use PHPUnit\Framework\TestCase;
use src\Model\Coins;
use src\Model\Menus;

class CoinsTest extends TestCase
{
    public function test_sum_1()
    {
        $coins = new Coins();
        $ret = $coins->sum(['100' => 1,'10' => 2]);
        $this->assertEquals($ret,120);
    }


    public function test_2(){
        $this->assertEquals(Menus::ENUM_MENUS[Menus::COFFEE],150);
    }
}
