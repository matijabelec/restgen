<?php
declare(strict_types=1);

namespace Test\Example;

use Test\UnitTest;

final class ExampleTest extends UnitTest
{
    public function testIsTrue(): void
    {
        $this->assertTrue(true);
    }
}
