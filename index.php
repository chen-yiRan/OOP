<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
//    if(isset($_GET['index'])){
//        include $_GET['index'] . ".inc.php";
//    }else{
//        include "start.inc.php";
//    }

    function __autoload($_className){
        require $_className . '.class.php';
    }
    $main = new Main($_GET['index']);
    include $main->_ui();
    echo $main->_send();
?>
</body>
</html>