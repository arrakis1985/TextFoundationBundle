<?php

use Nowfel\TextFoundationBundle\Exceptions\NumericValueToTextException;
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

    public function testToUpperCaseThrowLogicException(): void
    {
        $this->expectException(NumericValueToTextException::class);
        $this->textFoundation->toUpperCase("123456789");
    }

    public function testToLowerCaseThrowLogicException() :void
    {
        self::expectException(NumericValueToTextException::class);
        $this->textFoundation->toLowerCase("123456789");
    }
}