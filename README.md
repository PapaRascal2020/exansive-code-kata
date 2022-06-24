## Find the longest palindrome in a string

A palindrome is a word, verse, sentence, or number which reads the same backward as it
does forward.

* Only find palindromes of at least 3 characters in length
* If no palindromes are found, return `NULL`
* If multiple palindromes are found of the same length, return the first found

### For this scenario, we can:
* Ignore any white-space characters in the string 
  * White-space characters do not need retaining for the output
* Ignore casing in the string
  * Uppercase characters can be considered equal to lowercase characters
  * Character casing does not need retaining for the output
* Ignore any non-alphanumeric characters, for example, commas.
  * Non-alphanumeric characters do not need retaining for the output
* Refer to chosen language documentation


Input (palindromes underlined) | Expected Output
--- | ---
<u>Racecar</u>|racecar
<u>Red rum, sir, is murder</u>|redrumsirismurder
12345|`NULL`
123<u>acaca</u>cb123|acaca
xx|`NULL`
<u>xxx</u>|xxx
.....<u>x</u> , <u>1</u> ?! <u>x</u>......|x1x
<u>aaa</u> <u>bbb</u> <u>ccc</u>|aaa

### Run tests from within the directory.
php vendor/bin/phpunit tests
