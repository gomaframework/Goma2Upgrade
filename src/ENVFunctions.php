<?php
use Goma\ENV\GomaENV;
use Goma\Logging\ExceptionLogger;
use Goma\Logging\Logger;

defined("IN_GOMA") or die();
/**
 * Defines environment functions.
 *
 * @package goma/upgrade
 * @author Goma-Team
 * @license	GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
 */

function getCommandLineArgs() {
    return GomaENV::getCommandLineArgs();
}

function isPHPUnit() {
    return GomaENV::isPHPUnit();
}

function isCommandLineInterface() {
    return GomaENV::isCommandLineInterface();
}

function isDevModeCLI() {
    return GomaENV::isDevModeCLI();
}

function getMemoryLimit() {
    return GomaENV::getMemoryLimit();
}

function log_exception($exception) {
    ExceptionLogger::logException($exception);
}

function logging($string) {
    Logger::log($string, Logger::LOG_LEVEL_LOG);
}

function debug_log($string) {
    Logger::log($string, Logger::LOG_LEVEL_DEBUG);
}
