<?php


use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    /**
     * @test
     * @dataProvider cases
     */
    public function is_tests_for_longest_palindrome($str, $expected)
    {
        $palindrome = new App\Palindrome();
        $this->assertSame($expected, $palindrome->findOrFail($str));
    }

    public function cases()
    {
        return [
            ['Racecar', 'racecar'],
            ['Red rum, sir, is murder', 'redrumsirismurder'],
            ['12345', null],
            ['123acacacb123', 'acaca'],
            ['xx', null],
            ['xxx', 'xxx'],
            ['.....x , 1 ?! x......', 'x1x'],
            ['aaa bbb ccc', 'aaa']
        ];
    }

}
