<?php

use Nowfel\TextFoundationBundle\TextFoundation;
use PHPUnit\Framework\TestCase;

class TextFoundationTest extends TestCase
{
    private $textFoundation;

    public function setUp(): void
    {
        parent::setUp();
        $this->textFoundation = new TextFoundation();
    }

    public function testToUpperCase(): void
    {
        $expected = "LOREMIPSUM";
        $actual = $this->textFoundation->toUpperCase("loremipsum");
        self::assertSame($expected, $actual);
    }

    public function testToLowerCase(): void
    {
        $expected = "loremipsum";
        $actual = $this->textFoundation->toLowerCase("LOREMIPSUM");
        self::assertSame($expected, $actual);
    }
}