<?php
namespace Foobarlogy\SampleLib;

class StringHelper
{
    public static function excerpt(String $text, int $words_count, String $suffix = "....")
    {
        return true;
    }
    public static function count_word($word){
        return str_word_count($word);
    }
}