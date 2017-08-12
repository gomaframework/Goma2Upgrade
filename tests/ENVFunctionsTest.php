<?php

namespace Goma\Upgrade\Test;

defined("IN_GOMA") or die();

/**
 * Tests ENV functions.
 *
 * @package goma/upgrade
 * @author Goma-Team
 * @license	GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
 */
class ENVFunctionsTest extends \GomaUnitTest
{
    /**
     * tests if isPHPUnit returns true in this case.
     */
    public function testIsPHPUnit() {
        $this->assertTrue(isPHPUnit());
    }

    /**
     * tests if isCommandLineInterface returns true in this case.
     */
    public function testIsCommandLineInterface() {
        $this->assertTrue(isCommandLineInterface());
    }

    /**
     * tests getMemoryLimit.
     */
    public function testGetMemoryLimit() {
        $this->assertTrue(is_integer(getMemoryLimit()));
    }

    /**
     * tests if get command line args returns an array.
     */
    public function testGetCommandLineArgs() {
        $this->assertTrue(is_array(getCommandLineArgs()));
    }
}
