<?php



function getData($key, $default=null)
{
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
}

function generate_task1() {
    global $faker;
    $str = '';
    for ($i=0; $i<=$faker->numberBetween($min = 3, $max = 6); $i++) {
        $str .= $faker->randomDigit . ' ';
    }
    return $str;
}

function generate_task2() {
    global $faker;
    $str = '';
    for ($i=0; $i<=$faker->numberBetween($min = 3, $max = 6); $i++) {
        $str .= $faker->regexify('(\d|\w)->(\d|\w)') . ' ';
    }
    return $str;
}

function generate_task3() {
    global $faker;
    $str = '';
    for ($i=0; $i<=$faker->numberBetween($min = 10, $max = 20); $i++) {
        $str .= $faker->regexify('[a-zA-Z]');
    }
    return $str;
}