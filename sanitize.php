<?php

$input = '<p><script>alert("You won the \'Nigerian lottery!");</script></p>';
$email = filter_var('hamed@sina.com', FILTER_VALIDATE_EMAIL);


$password = 'hamed@1';
$passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost'=>12]);
echo password_verify($password, $passwordHash);

