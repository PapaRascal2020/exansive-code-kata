<?php

namespace App;

class Palindrome
{
    public function findOrReturnNull(string $str): ?string {

        $minLength = 3;

        $str = $this->filterNonAlphaNumericChars($str);
        $str = $this->convertToLowercase($str);

        $palindromes = $this->getPalindromes($str, strlen($str));
        $palindromes = $this->filterByLength($palindromes, $minLength);

        if(!empty($palindromes))
        {
            $longest = $this->findLargest($palindromes);
            return reset($longest);
        }

        return null;
    }

    protected function findLargest(array $array): array
    {
        usort($array, function($a, $b) {
            return strlen($b) - strlen($a);
        });

        return $array;
    }

    protected function filterByLength(array $array, int $minLength): array
    {
        return array_filter($array, function($idx) use ($minLength) {
           return strlen($idx) >= $minLength;
        });
    }

    protected function getPalindromes(string $str, int $endPos): array
    {
        $palindromes = [];

        for($start = 0; $start <= $endPos; $start++)
        {
            for($end = $endPos; $end >= $start; $end--)
            {
                $subStr = substr($str, $start, $end);

                if($subStr === strrev($subStr) && !in_array($subStr, $palindromes))
                {
                    $palindromes[] = $subStr;
                }
            }
        }

        return $palindromes;
    }


    protected function filterNonAlphaNumericChars(string $str): ?string
    {
        return preg_replace("/[^A-Za-z0-9]/", "", $str);
    }

    protected function convertToLowercase(string $str): ?string
    {
        return strtolower($str);
    }
}