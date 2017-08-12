<?php
defined("IN_GOMA") or die();
/**
 * Defines environment functions.
 *
 * @package goma/upgrade
 * @author Goma-Team
 * @license	GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
 */

define("CURRENT_PROJECT", APPLICATION);
define("PHP_MAIOR_VERSION", strtok(PHP_VERSION, "."));
define('TIME', time());
define("NOW", time());

define("DEFAULT_TIMEZONE", "Europe/Berlin");

// version
define("GOMA_VERSION", "3.0");
define("BUILD_VERSION", "1000");
