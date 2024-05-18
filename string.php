<?php
// Function to count the number of vowels in a string
function countVowels($string) {
    // Define a pattern for vowels (both lowercase and uppercase)
    $pattern = '/[aeiouAEIOU]/';
    // Use preg_match_all to count the vowels in the string
    preg_match_all($pattern, $string, $matches);
    // Return the count of vowels
    return count($matches[0]);
}

// Function to reverse a string
function reverseString($string) {
    // Use strrev to reverse the string
    return strrev($string);
}

// Function to process the array of strings
function processStrings($strings) {
    // Iterate through each string in the array
    foreach ($strings as $string) {
        // Count the number of vowels in the string
        $vowelCount = countVowels($string);
        // Reverse the string
        $reversedString = reverseString($string);
        // Print the string, count of vowels, and reversed string
        echo "Original String: $string,  Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}

// Example array of strings
$inputStrings = ["Hello", "World", "PHP", "Programming"];

// Call the function with the example array
processStrings($inputStrings);
?>
