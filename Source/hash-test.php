
<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$ec8iX9VUXHJ7rgiJURmIFOANLTsCbYV4w1q7jQ04zbP';

if (password_verify('123456', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>