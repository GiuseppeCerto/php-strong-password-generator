<?php

function generatePassword($characterNumber) {

    $lowercase = 'abcdefghilmnopqrstuvz';
    $uppercase = 'ABCDEFGHILMNOPQRSTUVZ';
    $numbers = '1234567890';
    $symbols = '!@#$%&*';

    $allCharacters = join('', array($lowercase, $uppercase, $numbers, $symbols));

    $password = '';

    if (isset($characterNumber)) {

        $index = '0';

        while ($index < $characterNumber) {

            $password .= $allCharacters[rand(0, strlen($allCharacters) - 1)];
            
            $index++;
        }
    }

    return $password;
}

?>