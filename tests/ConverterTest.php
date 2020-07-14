<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class ConverterTest extends TestCase
{
    function testCompare(): void
    {
        $str =  new Str();
        $this->assertEquals(
            true,
            $str->compare("abc", "abc")
        );
        $this->assertEquals(
            false,
            $str->compare("abc", "aabc")
        );
        $this->assertIsBool(
            $str->compare("1", "1")
        );
    }
    
    function testLen():void{

        $str = new Str();
        $this->assertIsInt($str->len('hgj'));

        $this->assertEquals(
            5,
            $str->len("hello")
        );
        $this->assertEquals(
            6,
            $str->len("привет")
        );
    }

}
