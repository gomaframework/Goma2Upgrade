<?php

use Goma\Logging\ExceptionLogger;
use Goma\Logging\Logger;

defined("IN_GOMA") OR die();
/**
 * Loggings functions
 *
 * @package    goma/upgrade
 * @link    http://goma-cms.org
 * @license LGPL http://www.gnu.org/copyleft/lesser.html see 'license.txt'
 * @author    Goma-Team
 */

function log_exception($exception) {
    ExceptionLogger::logException($exception);
}

function logging($string) {
    Logger::log($string, Logger::LOG_LEVEL_LOG);
}

function debug_log($string) {
    Logger::log($string, Logger::LOG_LEVEL_DEBUG);
}

function log_error($string) {
    Logger::log($string, Logger::LOG_LEVEL_ERROR);
}
