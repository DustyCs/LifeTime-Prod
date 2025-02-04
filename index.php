<?php 

$uri = $_SERVER['REQUEST_URI'];
$base_uri = '/LifeTime';
$parseUri = parse_url($uri, PHP_URL_PATH);

// Routing

include('router/router.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    
    <link rel="stylesheet" href="statics/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
   
</body>
</html>