<?php
use Goma\ENV\GomaENV;

defined("IN_GOMA") or die();

/**
 * Provides an autoloader, which adds aliases for renamed classes.
 *
 * package goma/upgrade
 * @author Goma-Team
 * @license	GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
 */
class ClassAliasMap
{
    /**
     * @var array
     */
    public static $classAliases = array(
        "exceptionmanager" => \Goma\Error\ExceptionManager::class,
        "gomaexception"    => \Goma\Error\GomaException::class
    );

    /**
     * @param string $class
     */
    public static function autoload($class) {
        if(isset(self::$classAliases[strtolower($class)])) {
            class_alias(self::$classAliases[strtolower($class)], $class);
        }
    }
}

spl_autoload_register(array(ClassAliasMap::class, "autoload"));
