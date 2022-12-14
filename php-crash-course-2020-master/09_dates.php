<?php

// Print current date
echo date('Y-m-d H:i:s').'<br>';
// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s').'<br>';
// Print current timestamp
echo time(). '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2022-9-19 12:38:00 ');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';


// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
    $datestring = 'september 19 2022 12:45:35';
    $parsedDate = date_parse_from_format('F j Y H:i:s', $datestring);
    echo '<pre>';
    var_dump($parsedDate);
    echo '</pre>';