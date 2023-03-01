<?php

require_once(__DIR__ . "/../../vendor/autoload.php");
require_once(__DIR__ . "/../../src/Model/Coins.php");

use PHP_CodeSniffer\Reports\Code;
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

    public function test_calcCoins(){
        $coins = new Coins();
        $this->assertEquals($coins->calcCoins(1000),"1000 1",'1000円');
        $this->assertEquals($coins->calcCoins(1500),"1000 1 500 1",'1500円');
        $this->assertEquals($coins->calcCoins(200),"100 2",'200円');
        $this->assertEquals($coins->calcCoins(3),"1 3",'3円');
        $this->assertEquals($coins->calcCoins(13),"10 1 1 3",'13円');
        $this->assertEquals($coins->calcCoins(0),"",'0円');
        $this->assertEquals($coins->calcCoins(-10),"",'マイナス');
    }
}
