<?php
/**
 * sb
 *
 * rpsimao
 * 20/10/16
 */
namespace SBCustom;

class CommonStrings
{

    public static function text($what)
    {
        $strings = [
            'pickups_description_box' => 'Like all SB Custom pickups these are shipped in a premium product box, and come with all mounting hardware, a wiring diagram and a Certificate of Quality and Authenticity.',

        ];
        return $strings[$what];
    }
}