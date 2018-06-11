<?php

class safeFactory
{
    public static function create($password, $foo = null)
    {
        if ($foo == "p")
        {
            return new premiumSafe($password);
        }
        else
        {
            return new Safe($password);
        }
    }
}