<?php
use PHPUnit\Framework\TestCase;
use App\Foo\Bar;

class BarTest extends TestCase
{
    /**
     * @test
     */
    public function baz()
    {
        $this->assertSame('baz# fbfb', Bar::baz('fbfb'));
    }
}