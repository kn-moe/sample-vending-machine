<?php
namespace src\Model;

class Coins{

    public function sum($coins){
        // Note:ほんとうはcoinsを配列からクラスに入れ直したほうがいいんだろうなぁとおもいつつ連想配列のまま触る

        $sum = 0;
        foreach($coins as $unitValue => $number){
            $sum += $unitValue * $number;
        }
        return $sum;
    }

    /**
     * 指定金額をコイン単位に分割して返す
     * @param int $amount 金額
     * @return string コインの金額と枚数(ex 130→ 100 1 10 3)
     * 0円の場合は空文字 
     */
    public function calcCoins(int $amount){
        if($amount <= 0){
            return "";
        }
        $cointyps = array_reverse([1,5,10,50,100,500,1000,5000,10000]);
        // コインの結果を入れる
        $ret = [];
        // 計算用
        $tmpAmount = $amount;
        // 大きい方から割っていく
        foreach($cointyps as $cointype){
            if(floor($tmpAmount / $cointype) >= 1){
                $addCoinNumber = floor($tmpAmount / $cointype);
                $tmpAmount = $tmpAmount % $cointype;
                //　硬貨を結果に追加
                $ret[] = $cointype;
                $ret[] = $addCoinNumber;
                // NOTE：ループ回数的にいらないとは思うが気分で。
                if($tmpAmount === 0){
                    break;
                }
            }
        }
        return implode(" ",$ret);
    }
}