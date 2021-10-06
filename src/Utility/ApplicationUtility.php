<?php


namespace Cisse\Bundle\TraitsBundle\Utility;

class ApplicationUtility
{
    public const LOCALE = "fr";
    public const LOCALES = ["fr", "en"];

    public static function locale(?string $locale = null): string
    {
        if ($locale !== null) {
            return $locale;
        }

        foreach (self::LOCALES as $LOCALE){
            if (isset($_SERVER['REQUEST_URI']) && str_contains($_SERVER['REQUEST_URI'], '/' . $LOCALE . '/')) {
                return $LOCALE;
            }
        }

        return self::LOCALE;
    }
}
