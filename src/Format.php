<?php

namespace Text;

class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }

    public static function strlenText($value)
    {
        return  strlen($value);
    }


}