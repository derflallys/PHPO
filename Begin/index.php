<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 10/01/2017
 * Time: 21:05
 */
require 'class/Autoloader.php';
Autoloader::register();
$form= new BootstrapForm($_POST);
//Test::WithZero(4);

?>

<form action="#">
    <?php
    echo $form->input("username");
    echo $form->input("password");
    echo $form->submit();
    ?>
</form>
</body>
</html>
