<?php

namespace App;

class Palindrome
{
    public function findOrFail($str) {

        $str = strtolower($this->sanitize($str));
        if(strlen($str) < 3) return null;
        if($str === strrev($str)) return $str;

        $startPos = 0;
        $endPos = strlen($str) - 1;

        $matches = [];

        for($start = 0; $start <= $endPos; $start++)
        {
            for($end = $endPos; $end >= $start; $end--)
            {
                $subStr = substr($str, $start, $end);

                if($subStr === strrev($subStr))
                {
                    $matches[] = $subStr;
                }
            }
        }

        $matches = array_filter($matches, function($x) {
           return strlen($x) > 2;
        });

        usort($matches, function($a, $b) {
            return strlen($b) - strlen($a);
        });

        if(!empty($matches)) return $matches[0];

        return null;
    }

    public function sanitize($str) {
        return str_replace([' ', '.', ',', '?', '!'], "", $str);
    }
}