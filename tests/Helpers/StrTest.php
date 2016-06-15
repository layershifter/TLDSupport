<?php

namespace LayerShifter\TLDSupport\Tests\Helpers;

use LayerShifter\TLDSupport\Helpers\Str;

/**
 * Test cases for Helpers\Str class.
 */
class StrTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test for endsWith() method.
     *
     * @return void
     */
    public function testEndsWith()
    {
        self::assertTrue(Str::endsWith('jason', 'on'));
        self::assertTrue(Str::endsWith('jason', 'jason'));
        self::assertTrue(Str::endsWith('jason', ['on']));
        self::assertTrue(Str::endsWith('jason', ['no', 'on']));
        self::assertFalse(Str::endsWith('jason', 'no'));
        self::assertFalse(Str::endsWith('jason', ['no']));
        self::assertFalse(Str::endsWith('jason', ''));
        self::assertFalse(Str::endsWith('7', ' 7'));
    }

    /**
     * Test for length() method.
     *
     * @return void
     */
    public function testLength()
    {
        self::assertEquals(11, Str::length('foo bar baz'));
    }

    /**
     * Test for lower() method.
     *
     * @return void
     */
    public function testLower()
    {
        self::assertEquals('foo bar baz', Str::lower('FOO BAR BAZ'));
        self::assertEquals('foo bar baz', Str::lower('fOo Bar bAz'));
    }

    /**
     * Test for substr() method.
     *
     * @return void
     */
    public function testSubstr()
    {
        self::assertEquals('Ё', Str::substr('БГДЖИЛЁ', -1));
        self::assertEquals('ЛЁ', Str::substr('БГДЖИЛЁ', -2));
        self::assertEquals('И', Str::substr('БГДЖИЛЁ', -3, 1));
        self::assertEquals('ДЖИЛ', Str::substr('БГДЖИЛЁ', 2, -1));
        self::assertEmpty(Str::substr('БГДЖИЛЁ', 4, -4));
        self::assertEquals('ИЛ', Str::substr('БГДЖИЛЁ', -3, -1));
        self::assertEquals('ГДЖИЛЁ', Str::substr('БГДЖИЛЁ', 1));
        self::assertEquals('ГДЖ', Str::substr('БГДЖИЛЁ', 1, 3));
        self::assertEquals('БГДЖ', Str::substr('БГДЖИЛЁ', 0, 4));
        self::assertEquals('Ё', Str::substr('БГДЖИЛЁ', -1, 1));
        self::assertEmpty(Str::substr('Б', 2));
    }

    /**
     * Test for startsWith() method.
     *
     * @return void
     */
    public function testStartsWith()
    {
        self::assertTrue(Str::startsWith('jason', 'jas'));
        self::assertTrue(Str::startsWith('jason', 'jason'));
        self::assertTrue(Str::startsWith('jason', ['jas']));
        self::assertTrue(Str::startsWith('jason', ['day', 'jas']));
        self::assertFalse(Str::startsWith('jason', 'day'));
        self::assertFalse(Str::startsWith('jason', ['day']));
        self::assertFalse(Str::startsWith('jason', ''));
    }
}
