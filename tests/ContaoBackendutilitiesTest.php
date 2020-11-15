<?php

/*
 * This file is part of Contao backend utilities.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoBackendutilities\Tests;

use Jrockenbauer\ContaoFormconfirmation\ContaoFormconfirmation;
use PHPUnit\Framework\TestCase;

class ContaoBackendutilitiesTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoBackendutilities();

        $this->assertInstanceOf('Jrockenbauer\ContaoBackendutilities\ContaoBackendutilities', $bundle);
    }
}
