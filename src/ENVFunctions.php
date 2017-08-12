<?php
use Goma\ENV\GomaENV;

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
