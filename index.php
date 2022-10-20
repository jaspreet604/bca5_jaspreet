<?php
// Determine whether a string is palindrome or not?
function isPalindrome($str)
{
    return strrev($str) == $str;
}
$str = "madam";
if (isPalindrome($str)) {
    echo "Yes the string '$str', is a palindrome";
} else {
    echo "No the string '$str', is not a palindrome";
}
?>