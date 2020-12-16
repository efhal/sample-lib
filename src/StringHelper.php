<?php
namespace Foobarlogy\SampleLib;

class StringHelper
{
    public static function excerpt(String $text, int $words_count, String $suffix = "....")
    {
        $words = explode(" ", $text);
        if (count($words) <= $words_count) {
            return $text;
        }
        return implode(" ", array_slice($words, 0, $words_count)) . $suffix;
    }
    public static function count_word($word){
        return str_word_count($word);
    }
}