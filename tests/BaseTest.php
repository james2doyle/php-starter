<?php
/**
 * Base test class for the package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Project
 * @version    1.0.0
 * @author     James Doyle
 * @license    MIT License
 * @copyright  (c) 2019, James Doyle
 * @link       https://ohdoylerules.com
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MyClass;

class BaseTest extends TestCase
{
    /** @test */
    public function itCanPassATest()
    {
        $func = new MyClass;
        self::assertEquals('hello world', $func());
    }
}
