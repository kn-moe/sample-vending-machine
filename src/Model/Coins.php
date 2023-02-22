<?php


class Coins{

    public function sum($coins){
        // Note:ほんとうはcoinsを配列からクラスに入れ直したほうがいいんだろうなぁとおもいつつ連想配列のまま触る

        $sum = 0;
        foreach($coins as $unitValue => $number){
            $sum += $unitValue * $number;
        }
        return $sum;
    }
}