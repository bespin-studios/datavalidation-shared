<?php

namespace Bespin\DataValidation;

enum Country
{
    case Austria;
    case Belgium;
    case Bulgaria;
    case Croatia;
    case Cyprus;
    case CzechRepublic;
    case Denmark;
    case Estonia;
    case Finland;
    case France;
    case Germany;
    case Greece;
    case Hungary;
    case Ireland;
    case Italy;
    case Latvia;
    case Lithuania;
    case Luxembourg;
    case Malta;
    case Netherlands;
    case Poland;
    case Portugal;
    case Romania;
    case Slovakia;
    case Slovenia;
    case Spain;
    case Sweden;
    case UnitedKingdom;

    public static function byCode(string $code): ?Country
    {
        if (strlen($code) !== 2) {
            return null;
        }
        return match (strtoupper($code)) {
            'AT'    => Country::Austria,
            'BE'    => Country::Belgium,
            'BG'    => Country::Bulgaria,
            'HR'    => Country::Croatia,
            'CY'    => Country::Cyprus,
            'CZ'    => Country::CzechRepublic,
            'DE'    => Country::Germany,
            'DK'    => Country::Denmark,
            'EE'    => Country::Estonia,
            'EL'    => Country::Greece,
            'ES'    => Country::Spain,
            'FI'    => Country::Finland,
            'FR'    => Country::France,
            'GB'    => Country::UnitedKingdom,
            'HU'    => Country::Hungary,
            'IE'    => Country::Ireland,
            'IT'    => Country::Italy,
            'LT'    => Country::Lithuania,
            'LU'    => Country::Luxembourg,
            'LV'    => Country::Latvia,
            'MT'    => Country::Malta,
            'NL'    => Country::Netherlands,
            'PL'    => Country::Poland,
            'PT'    => Country::Portugal,
            'RO'    => Country::Romania,
            'SE'    => Country::Sweden,
            'SI'    => Country::Slovenia,
            'SK'    => Country::Slovakia,
            default => null,
        };
    }
}
