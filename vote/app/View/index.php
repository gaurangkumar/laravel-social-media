<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
use Friday\Foundation\Application;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IronPHP: The PHP Framework</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header class="style">
        <h1>{{name}} <?=Application::VERSION?></h1>
    </header>
</body>
</html>
