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
            echo("array('one', 'box', 'dog', 'cat', array('one', 'two', 'three'))<br>");
            echo('count($array)' . ': Result: ' . (count($array)) . '<br>');
            echo('count($array, <strong> COUNT_RECURSIVE </strong>) COUNT_RECURSIVE, count the elements that is into array inside thr array too. Result: ' . count(
                    $array,
                    COUNT_RECURSIVE
                ) . '<br>');
            $count = count($array);
            for ($i = 0; $i < $count; $i++) {
                echo $array[$i] . '<br>';
            }
            ?>
        </div>
        <div class="mb-6">
            <h4>is_array() - check if the variable is an array</h4>
            <?php
            $array = array('one', 'box', 'dog');
            echo("array('one', 'box', 'dog', 'cat')<br>");
            if (is_array($array)) {
                $count = count($array);
                echo 'the variable is an array<br>';
                for ($i = 0; $i < $count; $i++) {
                    echo($array[$i] . '<br>');
                }
            } else {
                echo 'the variable is not an array';
            }
            ?>
        </div>
        <div class="mb-6">
            <h4>substr() - extract part of the text, first parameter is the start position, second parameter is the
                number of characters to extract, substr($text, 0, 5) - extract from position 0, 5 characters</h4>
            <?php
            $text = 'sasho is learning php function';
            $extract = substr($text, 0, 5);
            echo("<br> text is: sasho is learning php function<br>");
            echo('result is: ' . $extract . '<br>');
            $extract2 = substr($text, -8);
            echo('substr($text, -8, extract from the end 8 characters result is: ' . $extract2 . '<br>');
            ?>
        </div>
        <div class="mb-6">
            <h4>in_array() - check if the value is into array first parameter is the the value to check, second
                parameter is the array where to check, third parameter strict check the data type</h4>
            <?php
            $array = array(12.5, 'one', 'box', 100, 'dog');
            echo(" array(12.5, 'one', 'box', 100, 'dog')<br>if (in_array('12.5', $array, true)){
                echo 'the value is found';
            } else{
                echo 'value is not found';
            }<br>");
            //******************
            if (in_array('12.5', $array, true)) {
                echo 'the value is found';
            } else {
                echo 'the value is not found';
            }
            ?>
        </div>
        <div class="mb-6">
            <h4>explode() - Returns an array of strings, each of which is a substring of string formed by splitting it
                on boundaries formed by the string separator.</h4>
            <?php
            echo("text = 'red, black, green, yellow, gray' <br>");
            echo("explode(',', text) - first parameter is separator, second parameter is the text, third parameter define amount of elements to include<br>");
            $text = 'red, black, green, yellow, gray';
            $text_array = explode(',', $text, 3);
            print_r($text_array);
            ?>
        </div>
        <div class="mb-6">
            <h4>str_replace() — Replace all occurrences of the search string with the replacement string</h4>
            <?php
            echo 'str_replace("world","Peter","Hello world!") - Search the string "Hello World!", find the value "world" and replace it with "Peter":<br>';
            echo str_replace("world", "Peter", "Hello world!");
            ?>
        </div>
        <div class="mb-6">
            <h4>implode() — Join array elements with a string</h4>
            <?php
            echo("array('one','two','three','four', 'five')<br> make text with comma separator from array<br>implode(' , ',array)<br>");
            $arr = array('one', 'two', 'three', 'four', 'five');
            echo implode(" , ", $arr);
            ?>
        </div>
        <div class="mb-6">
            <h4>strlen() — Get string length</h4>
            <?php
            echo('strlen("Sasho")<br>');
            echo strlen("Sasho");
            ?>
        </div>
        <div class="mb-6">
            <h4>array_merge() — Merge one or more arrays</h4>
            <?php
            echo('$a1=array("red","green");<br>
            $a2=array("blue","yellow")<br>
            array_merge($a1,$a2)<br>');
            $a1 = array("red", "green");
            $a2 = array("blue", "yellow");
            print_r(array_merge($a1, $a2));
            ?>
        </div>
        <div class="mb-6">
            <h4>strpos() — Find the position of the first occurrence of a substring in a string</h4>
            <?php
            $mystring = 'abc';
            $findme = 'a';
            $pos = strpos($mystring, $findme);
            echo("mystring = 'abc';<br>
            findme   = 'a';<br>
            pos = strpos(mystring, findme);<br>
            if ($pos === false) {
                 The string findme was not found in the string mystring;
            } else {
                The string findme was found in the string mystring;
                and exists at position $pos
            }<br>");
            if ($pos === false) {
                echo "The string '$findme' was not found in the string '$mystring'";
            } else {
                echo "The string '$findme' was found in the string '$mystring'";
                echo " and exists at position $pos";
            }
            echo ('<br>echo strpos("I love , I love php too!","too");<br>');
            echo strpos("I love , I love php too!","too");
            ?>
        </div>
        <div class="mb-6">
            <h4>preg_match() — Perform a regular expression match</h4>
            <?php
            echo('Use a regular expression to do a case-insensitive search for "Sasho" in a string: return boolean 0 or 1<br>
            $str = "Sasho is learning php functions";<br>
            $pattern = "/w3schools/i";<br>
            echo preg_match($pattern, $str)<br>');
            $str = "Sasho is learning php functions";
            $pattern = "/Sasho/i";
            echo ('Result: '.preg_match($pattern, $str, $match).'<br>');
            print_r($match);
            ?>
        </div>
        <div class="mb-6">
            <h4>sprintf() — Return a formatted string</h4>
            <?php
            echo('Replace the percent (%) sign by a variable passed as an argument:<br>
            $number = 100;<br>
            $str = "dollars";<br>
            sprintf("There are %u %s in my pocket.",$number,$str)<br>');
            $number = 100;
            $str = "dollars";
            $txt = sprintf("There are %u %s in my pocket.",$number,$str);
            echo ('Result: '.$txt);
            ?>
        </div>
        <div class="mb-6">
            <h4>trim() — Strip whitespace (or other characters) from the beginning and end of a string</h4>
            <?php
            echo('Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World"):<br>
            $str = "Hello World!";<br>
            echo $str . "<br>";
            echo trim($str,"Hed!");<br>');
            $str = "Hello World!";
            echo $str . "<br>";
            echo trim($str,"Hed!");
            ?>
        </div>
    </div>
</main>
</body>
</html>
