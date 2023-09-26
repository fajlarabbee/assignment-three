<?php 
/**
 * Task 5: Password Generator
 * Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
 */

function generatePassword(int $length): string {
    $pass_characters = [];
    $password = '';
    // Set characters for password generation.
    $pass_characters['lowercase'] = 'abcdefghijklmnopqrstuvwxyz';
    $pass_characters['uppercase'] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pass_characters['numbers'] = '1234567890';
    $pass_characters['special'] = '!@#$%^&*()_+';

    foreach($pass_characters as $pass_values) {
        $password .= $pass_values[rand(0, strlen($pass_values)-1)];
    }
    $mixed_characters = join('', $pass_characters);
    $mixed_length = strlen($mixed_characters);
    $remaining_length = $length - strlen($password);
    for($i = 0; $i < $remaining_length; $i++) {
        $password .= $mixed_characters[rand(0, $mixed_length-1)];
    }
    return str_shuffle($password);
}

echo generatePassword(12);