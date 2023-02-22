<?php
namespace src\Model;

class Menus{
    public const COLA = 'cola'; // コーラ120円
    public const COFFEE = 'coffee'; // コーヒー150円
    public const ENERGY_DRINK = 'energy_drink'; // エナジードリンク210円

    public const ENUM_MENUS = [
        self::COLA => 120,
        self::COFFEE => 150,
        self::ENERGY_DRINK => 210
    ];


}