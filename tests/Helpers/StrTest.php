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
        $this->assertTrue(Str::endsWith('jason', 'on'));
        $this->assertTrue(Str::endsWith('jason', 'jason'));
        $this->assertTrue(Str::endsWith('jason', ['on']));
        $this->assertTrue(Str::endsWith('jason', ['no', 'on']));
        $this->assertFalse(Str::endsWith('jason', 'no'));
        $this->assertFalse(Str::endsWith('jason', ['no']));
        $this->assertFalse(Str::endsWith('jason', ''));
        $this->assertFalse(Str::endsWith('7', ' 7'));
    }

    /**
     * Test for length() method.
     *
     * @return void
     */
    public function testLength()
    {
        $this->assertEquals(11, Str::length('foo bar baz'));
    }

    /**
     * Test for lower() method.
     *
     * @return void
     */
    public function testLower()
    {
        $this->assertEquals('foo bar baz', Str::lower('FOO BAR BAZ'));
        $this->assertEquals('foo bar baz', Str::lower('fOo Bar bAz'));
    }

    /**
     * Test for substr() method.
     *
     * @return void
     */
    public function testSubstr()
    {
        $this->assertEquals('Ё', Str::substr('БГДЖИЛЁ', -1));
        $this->assertEquals('ЛЁ', Str::substr('БГДЖИЛЁ', -2));
        $this->assertEquals('И', Str::substr('БГДЖИЛЁ', -3, 1));
        $this->assertEquals('ДЖИЛ', Str::substr('БГДЖИЛЁ', 2, -1));
        $this->assertEmpty(Str::substr('БГДЖИЛЁ', 4, -4));
        $this->assertEquals('ИЛ', Str::substr('БГДЖИЛЁ', -3, -1));
        $this->assertEquals('ГДЖИЛЁ', Str::substr('БГДЖИЛЁ', 1));
        $this->assertEquals('ГДЖ', Str::substr('БГДЖИЛЁ', 1, 3));
        $this->assertEquals('БГДЖ', Str::substr('БГДЖИЛЁ', 0, 4));
        $this->assertEquals('Ё', Str::substr('БГДЖИЛЁ', -1, 1));
        $this->assertEmpty(Str::substr('Б', 2));
    }

    /**
     * Test for startsWith() method.
     *
     * @return void
     */
    public function testStartsWith()
    {
        $this->assertTrue(Str::startsWith('jason', 'jas'));
        $this->assertTrue(Str::startsWith('jason', 'jason'));
        $this->assertTrue(Str::startsWith('jason', ['jas']));
        $this->assertTrue(Str::startsWith('jason', ['day', 'jas']));
        $this->assertFalse(Str::startsWith('jason', 'day'));
        $this->assertFalse(Str::startsWith('jason', ['day']));
        $this->assertFalse(Str::startsWith('jason', ''));
    }
}
