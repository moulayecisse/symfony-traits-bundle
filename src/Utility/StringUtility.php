<?php

namespace Cisse\Bundle\TraitsBundle\Utility;

//use Doctrine\Common\Inflector\Inflector as LegacyInflector;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\DependencyInjection\Container;
use function count;
use function strlen;

class StringUtility
{
    /** @var Inflector|null */
    protected static ?Inflector $inflector;

    /**
     * Ensures that the given string ends with the given prefix. If the string
     * already contains the prefix, it's not added twice. It's case-insensitive
     * (e.g. value: 'Foocommand' prefix: 'Command' -> result: 'FooCommand').
     */
    public static function addPrefix(string $value, string $prefix): string
    {
        return self::removePrefix($value, $prefix) . $prefix;
    }

    /**
     * Ensures that the given string doesn't end with the given prefix. If the
     * string contains the prefix multiple times, only the last one is removed.
     * It's case-insensitive (e.g. value: 'Foocommand' prefix: 'Command' -> result: 'Foo').
     */
    public static function removePrefix(string $value, string $prefix): string
    {
        return self::hasPrefix($value, $prefix) ? self::replaceFirst($prefix, '', $value) : $value;
    }

    public static function removePrefixes(string $value, array $prefixes): string
    {
        foreach ($prefixes as $prefix) {
            $value = self::removePrefix($value, $prefix);
        }

        return $value;
    }

    /**
     * Looks for prefixes in strings in a case-insensitive way.
     */
    #[Pure] public static function hasPrefix(string $value, string $prefix): bool
    {
        return self::startsWith($prefix, $value);
    }

    public static function startsWith($search, $string): bool
    {
        return str_starts_with($string, $search);
    }

    public static function endsWith($search, $string): bool
    {
        return str_ends_with($string, $search);
    }

    #[Pure] public static function startsWithOneOf(string $string = '', array $array = []): bool
    {
        foreach ($array as $search) {
            if (self::startsWith($search, $string)) {
                return true;
            }
        }
        return false;
    }

    #[Pure] public static function endsWithOneOf(string $string = '', array $array = []): bool
    {
        foreach ($array as $search) {
            if (self::endsWith($search, $string)) {
                return true;
            }
        }
        return false;
    }

    public static function replaceFirst($search, $replace, $string): array|string|null
    {
        $search = '/' . preg_quote($search, '/') . '/';

        return preg_replace($search, $replace, $string, 1);
    }

    public static function asRoutePath(string $value): string
    {
        return '/' . str_replace('_', '/', self::asTwigVariable($value));
    }

    /**
     * Transforms the given string into the format commonly used by Twig variables
     * (e.g. `BlogPostType` -> `blog_post_type`).
     */
    public static function asTwigVariable(string $value): string
    {
        $value = trim($value);
        $value = preg_replace('/[^a-zA-Z0-9_]/', '_', $value);
        $value = preg_replace('/(?<=\\w)([A-Z])/', '_$1', $value);
        $value = preg_replace('/_{2,}/', '_', $value);
        return strtolower($value);
    }

    public static function asRouteName(string $value): string
    {
        return self::asTwigVariable($value);
    }

    public static function asCommand(string $value): string
    {
        return str_replace('_', '-', self::asTwigVariable($value));
    }

    public static function asEventMethod(string $eventName): string
    {
        return sprintf('on%s', self::asClassName($eventName));
    }

    /**
     * Transforms the given string into the format commonly used by PHP classes,
     * (e.g. `app:do_this-and_that` -> `AppDoThisAndThat`) but it doesn't check
     * the validity of the class name.
     */
    public static function asClassName(string $value, string $suffix = ''): string
    {
        $value = trim($value);
        $value = str_replace(['-', '_', '.', ':'], ' ', $value);
        $value = ucwords($value);
        $value = str_replace(' ', '', $value);
        $value = ucfirst($value);
        $value = self::addSuffix($value, $suffix);
        return ucwords($value, "\\");
    }

    /**
     * Ensures that the given string ends with the given suffix. If the string
     * already contains the suffix, it's not added twice. It's case-insensitive
     * (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'FooCommand').
     */
    #[Pure] public static function addSuffix(string $value, string $suffix): string
    {
        return self::removeSuffix($value, $suffix) . $suffix;
    }

    /**
     * Ensures that the given string doesn't end with the given suffix. If the
     * string contains the suffix multiple times, only the last one is removed.
     * It's case-insensitive (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'Foo').
     */
    #[Pure] public static function removeSuffix(string $value, string $suffix): string
    {
        return self::hasSuffix($value, $suffix) ? substr($value, 0, -strlen($suffix)) : $value;
    }

    #[Pure] public static function removeSuffixes(string $value, array $suffixes): string
    {
        foreach ($suffixes as $suffix) {
            $value = self::removeSuffix($value, $suffix);
        }

        return $value;
    }

    /**
     * Looks for suffixes in strings in a case-insensitive way.
     */
    public static function hasSuffix(string $value, string $suffix): bool
    {
        return 0 === strcasecmp($suffix, substr($value, -strlen($suffix)));
    }

    #[Pure] public static function getShortClassName(string $fullClassName): string
    {
        if (empty(self::getNamespace($fullClassName))) {
            return $fullClassName;
        }

        return substr($fullClassName, strrpos($fullClassName, '\\') + 1);
    }

    public static function getNamespace(string $fullClassName): string
    {
        return substr($fullClassName, 0, strrpos($fullClassName, '\\'));
    }

    public static function asFilePath(string $value): string
    {
        $value = Container::underscore(trim($value));
        return str_replace('\\', '/', $value);
    }

    public static function singularCamelCaseToPluralCamelCase(string $camelCase): string
    {
        $snake = self::asSnakeCase($camelCase);
        $words = explode('_', $snake);
        $words[count($words) - 1] = self::pluralize($words[count($words) - 1]);
        $reSnaked = implode('_', $words);

        return self::asLowerCamelCase($reSnaked);
    }

    public static function asSnakeCase(string $value): string
    {
        return self::asTwigVariable($value);
    }

    public static function slugify(string $value): string
    {
        $value = trim($value);
        $value = preg_replace('/[^a-zA-Z0-9_]/', '-', $value);
        $value = preg_replace('/(?<=\\w)([A-Z])/', '-$1', $value);
        $value = preg_replace('/_{2,}/', '-', $value);
        return strtolower($value);
    }

    public static function urlify(string $value): string
    {
        return str_replace('_', '-', self::slugify($value));
    }

//    protected static function pluralize(string $word): string
//    {
//        if (class_exists(Inflector::class)) {
//            return static::getInflector()->pluralize($word);
//        }
//
//        return LegacyInflector::pluralize($word);
//    }

    protected static function getInflector(): Inflector
    {
        if (null === static::$inflector) {
            static::$inflector = InflectorFactory::create()->build();
        }

        return static::$inflector;
    }

    #[Pure] public static function asLowerCamelCase(string $str): string
    {
        return lcfirst(self::asCamelCase($str));
    }

    public static function asCamelCase(string $str): string
    {
        return strtr(ucwords(strtr($str, ['_' => ' ', '.' => ' ', '\\' => ' '])), [' ' => '']);
    }

    public static function pluralCamelCaseToSingular(string $camelCase): string
    {
        $snake = self::asSnakeCase($camelCase);
        $words = explode('_', $snake);
        $words[count($words) - 1] = self::singularize($words[count($words) - 1]);
        $reSnaked = implode('_', $words);

        return self::asLowerCamelCase($reSnaked);
    }

//    protected static function singularize(string $word): string
//    {
//        if (class_exists(Inflector::class)) {
//            return static::getInflector()->singularize($word);
//        }
//
//        return LegacyInflector::singularize($word);
//    }

    public static function getRandomTerm(): string
    {
        $adjectives = [
            'tiny',
            'delicious',
            'gentle',
            'agreeable',
            'brave',
            'orange',
            'grumpy',
            'fierce',
            'victorious',
        ];
        $nouns = [
            'elephant',
            'pizza',
            'popsicle',
            'chef',
            'puppy',
            'gnome',
            'kangaroo',
        ];

        return sprintf('%s %s', $adjectives[array_rand($adjectives)], $nouns[array_rand($nouns)]);
    }

    /**
     * Checks if the given name is a valid PHP variable name.
     *
     * @see http://php.net/manual/en/language.variables.basics.php
     *
     * @param $name string
     * @return bool
     */
    public static function isValidPhpVariableName(string $name): bool
    {
        return (bool)preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $name, $matches);
    }

    public static function areClassesAlphabetical(string $class1, string $class2): bool
    {
        $arr1 = [$class1, $class2];
        $arr2 = [$class1, $class2];
        sort($arr2);

        return $arr1[0] == $arr2[0];
    }

    public static function asHumanWords(string $variableName): string
    {
        return str_replace('  ', ' ', ucfirst(trim(implode(' ', preg_split('/(?=[A-Z])/', $variableName)))));
    }

    #[Pure] public static function toSingular($string)
    {
        if (self::endsWith($string, 'ies')) {
            $string = self::replaceLast('ies', 'y', $string);
        }

        if (self::endsWith($string, 's')) {
            $string = self::replaceLast('s', '', $string);
        }

        return $string;
    }

    public static function replaceLast($search, $replace, $string)
    {
        if (($position = strrpos($string, $search)) !== false) {
            $searchLength = strlen($search);
            $string = substr_replace($string, $replace, $position, $searchLength);
        }

        return $string;
    }

    #[Pure] public static function prefixIfNotStartWith($prefix, $string): string
    {
        if (StringUtility::startsWith($prefix, $string)) {
            return $string;
        }

        return StringUtility::prefix($prefix, $string);
    }

    public static function prefix($prefix, $string): string
    {
        return $prefix . $string;
    }

    #[Pure] public static function suffixIfNotStartWith($suffix, $string): string
    {
        if (StringUtility::endsWith($suffix, $string)) {
            return $string;
        }

        return StringUtility::suffix($suffix, $string);
    }

    public static function suffix($suffix, $string): string
    {
        return $string . $suffix;
    }

    public static function replaceIfStartWith($search, $replace, $string)
    {
        if (!StringUtility::startsWith($search, $string)) {
            return $string;
        }

        return StringUtility::replaceFirst($search, $replace, $string);
    }

    public static function textBetween(string $text, string $start, string $end): string
    {
        $startPosition = strpos($text, $start);
        $endPosition = strpos($text, $end);

        if (!$startPosition || !$endPosition || $startPosition >= $endPosition) {
            return $text;
        }

        $startLength = strlen($start);
        $length = strlen($text);

        return substr($text, $startPosition + $startLength, $endPosition - $length);
    }

    public static function deleteBetween(string $text, string $start, string $end): array|string
    {
        $startPosition = strpos($text, $start);
        $endPosition = strpos($text, $end);

        if (!$startPosition || !$endPosition || $startPosition >= $endPosition) {
            return $text;
        }

        $endLength = strlen($end);
        $length = strlen($text);

        return substr_replace($text, '', $startPosition, ($endPosition + $endLength) - $length);
    }

    public static function clean(string $text): string
    {
        $text = preg_replace('/\s\s+/', '', $text);
        $text = str_replace("\n", '', $text);
        $text = str_replace("\r", '', $text);
        $text = str_replace("\t", '', $text);
        $text = str_replace("\r\n", '', $text);
        return trim($text);
    }

    #[Pure] public static function toPluriel(string $text): string
    {
        return self::endsWith('y', $text)
            ? self::replaceLast('y', 'ies', $text)
            : "{$text}s";
    }

    #[Pure] public static function toSing(string $text): string
    {
        return self::endsWith('ies', $text)
            ? self::replaceLast('ies', 'y', $text)
            : self::removeSuffix($text, 's');
    }
}
