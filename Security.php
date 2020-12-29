<!DOCTYPE html>
<html>
  <head>
    <title>Security</title>
  </head>
  <body>
    <h1><?php header('X-Frame-Options: DENY'); ?></h1> 
    <h2><?php header("X-XSS-Protection: 1; mode=block"); ?></h2>
    <h3><?php header("X-Content-Type-Options: nosniff"); ?></h3>
  </body>
</html>