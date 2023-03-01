<?php

namespace src\Usecase;
use src\Usecase\IVenders;
use src\Model\Coins;
use src\Model\Menus;

class Venders implements IVenders{
    function __construct(){

    }

    public const NO_CHANGE = 'nochange';

    public function buy(array $coins,string $menu){
        // コインの合計金額を計算
        $sumInputAmount = $this->sumInputAmount($coins);
        // 単価取得
        $unitPrice = $this->getUnitPrice($menu);
        // おつり計算
        $changeCoinStr = $this->calChangeCoins($sumInputAmount,$unitPrice);
        
        // お釣りなしの場合は文字列で返す
        if($changeCoinStr === ""){
            return self::NO_CHANGE;
        }
        // おつり
        return $changeCoinStr;
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
    private function getUnitPrice(string $menu){
        return Menus::ENUM_MENUS[$menu];
    }
    /**
     * お釣り計算
     * @return array
     */
    private function calChangeCoins($sumInputAmount,$unitPrice){
        // お釣り金額
        // NOTE: お釣りがマイナス等のエラーは考慮しない
        $changeAmount = $sumInputAmount - $unitPrice;

        $coins = new Coins();
        return $coins->calcCoins($changeAmount);
    }

}