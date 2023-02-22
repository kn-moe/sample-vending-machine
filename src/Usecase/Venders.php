<?php

namespace src\Usecase;
use src\Usecase\IVenders;
use src\Model\Coins;
use src\Model\Menus;

class Venders implements IVenders{
    function __construct(){

    }

    public function buy(array $coins,array $menu){
        // コインの合計金額を計算
        $sumInputAmount = $this->sumInputAmount($coins['coins']);
        // 購入
        
        // おつり計算

        return "test";
    }
    /**
     * 投入金額を計算
     */
    private function sumInputAmount($coinsArray){
        $coins = new Coins();
        return $coins->sum($coinsArray);
    }
    /**
     * メニューから単価を取得する
     */
    private function getUnitPrice(){
    }

}