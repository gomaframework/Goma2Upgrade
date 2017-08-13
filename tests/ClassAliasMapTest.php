<?php

namespace Goma\Upgrade\Test;

use Goma\Upgrade\Test\Autoload\AutoloadTest;
use GomaUnitTest;

defined("IN_GOMA") or die();

/**
 * Tests ClassAliasMap.
 *
 * @package goma/upgrade
 * @author Goma-Team
 * @license	GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
 */
class ClassAliasMapTest extends GomaUnitTest
{
    /**
     * tests if ClassAliasMap is mapping class for autoloading.
     */
    public function testMapClassForAutoload() {
        \ClassAliasMap::$classAliases["autoloadtest"] = AutoloadTest::class;

        $this->assertEqual("var", \AutoloadTest::$var);
    }
}
