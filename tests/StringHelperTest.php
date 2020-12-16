<?php

use Foobarlogy\SampleLib\StringHelper;
use PHPUnit\Framework\TestCase;

final class StringHelperTest extends TestCase
{
    public function testExcerpt()
    {
        $text = "Ea esse pariatur tempor incididunt esse ullamco ipsum elit et consectetur ut.";
        $result = StringHelper::excerpt($text, 3, "...");

        $expected = true;

        $this->assertEquals($expected, $result);

    }
    public function testCount_word(){
        $text = "Ternate Indah sfsdf";
        $result = StringHelper::count_word($text);
        $expected = 3;
        $this->assertEquals($expected,$result);
    }
}