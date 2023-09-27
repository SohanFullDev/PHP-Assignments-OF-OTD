<?php
function generatePassword($length) {
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($charset) - 1);
        $password .= $charset[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: $password\n";
?>
