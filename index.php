<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP functions</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<main>
    <div class="container py-4">
        <header class="pb-3 mb-6 border-bottom text-center">
                <strong class="fs-4">PHP Functions</strong>
        </header>
        <div class="mb-6">
                <h4>Count() - count elements in array</h4>
               <?php
                    $array = array('one', 'box', 'dog', 'cat', array('one', 'two', 'three'));
                    echo ("array('one', 'box', 'dog', 'cat', array('one', 'two', 'three'))<br>");
                    echo ('count($array)'.': Result: '.(count($array)).'<br>');
               echo ('count($array, <strong> COUNT_RECURSIVE </strong>) COUNT_RECURSIVE, count the elements that is into array inside thr array too. Result: '.count($array, COUNT_RECURSIVE).'<br>');
               $count = count($array);
               for($i=0;$i<$count;$i++){
                    echo $array[$i].'<br>';
               }
                ?>
            </div>
        <div class="mb-6">
                <h4>is_array() - check if the variable is an array</h4>
                <?php
                $array = array('one', 'box', 'dog');
                echo ("array('one', 'box', 'dog', 'cat')<br>");
               if (is_array($array)){
                   $count = count($array);
                   echo 'the variable is an array<br>';
                   for($i=0;$i<$count;$i++){
                       echo ($array[$i].'<br>');
                   }
               } else{
                   echo 'the variable is not an array';
               }
                ?>
        </div>
        <div class="mb-6">
            <h4>substr() - extract part of the text, first parameter is the start position, second parameter is the number of characters to extract,  substr($text, 0, 5) - extract from position 0, 5 characters</h4>
            <?php
            $text = 'sasho is learning php function';
            $extract = substr($text, 0, 5);
            echo ("<br> text is: sasho is learning php function<br>");
            echo ('result is: '.$extract.'<br>');
            $extract2 = substr($text, -8);
            echo ('substr($text, -8, extract from the end 8 characters result is: '.$extract2.'<br>');
            ?>
        </div>
        <div class="mb-6">
            <h4>in_array() - check if the value is into array first parameter is the the value to check, second parameter is the array where to check, third parameter strict check the data type</h4>
            <?php
            $array = array(12.5, 'one', 'box', 100, 'dog');
            echo (" array(12.5, 'one', 'box', 100, 'dog')<br>if (in_array('12.5', $array, true)){
                echo 'the value is found';
            } else{
                echo 'value is not found';
            }<br>");
            //******************
            if (in_array('12.5', $array, true)){
                echo 'the value is found';
            } else{
                echo 'the value is not found';
            }
            ?>
        </div>
        <div class="mb-6">
            <h4>explode() - Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.</h4>
            <?php

            ?>
        </div>
    </div>
</main>
</body>
</html>
