<?php
namespace src\Entity;

class Item{

    // メニュー
    private $menu;
    // 単価
    private $unitPrice;

    function __construct(string $_menu,int $_unitPrice){
        $this->menu = $_menu;
        $this->unitPrice = $_unitPrice;
    }

    public function getUnitPrice(){
        return $this->unitPrice;
    }

    public function getMenus(){
        return $this->menu;
    }
}