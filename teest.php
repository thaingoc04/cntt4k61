<?php
$statusCode = 500;
$message = match($statusCode) {
  200, 300 => null,
  400 => 'not found',
  500 => 'server error',
  default => 'known status code',
};
echo $message; # => server error
?>

<?php
  
?>
