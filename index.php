!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <header class="pb-3 mb-6 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                     role="img"><title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                          fill="currentColor"></path>
                </svg>
                <span class="fs-4">PHP Functions</span>
            </a>
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
    </div>
</main>
</body>
</html>
