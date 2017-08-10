<?php
$count = 100;
$i = 0;
while ($i < $count) {
    $i++;
    $echo = ($i % 2 == 0) ? 'Fizz' : $i;
    $echo = ($i % 5 == 0) ? 'Buzz' : $echo;
    $echo = ($i % 2 === 0) && ($i % 5 == 0) ? 'FizzBuzz' : $echo;
    echo $echo;
}
