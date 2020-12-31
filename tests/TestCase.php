<?php

namespace Roots\PasswordBcrypt\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class TestCase extends MockeryTestCase
{
    use MocksWpdb;
    use MocksWpHasher;

    protected function setUp(): void
    {
        Monkey\setUp();
        parent::setUp();
    }

    protected function tearDown(): void
    {
        Monkey\tearDown();
        parent::tearDown();
    }
}
