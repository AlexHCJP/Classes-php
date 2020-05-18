<?php

use HTML\Doctype;
use HTML\Tag;

include_once ('autoload.php');
echo Doctype::get('SH');

$app = new Collection([]);
$app->name = 'Tester';
$app->timezone = "UTC+6";
$app->lang = 'ru_RU';


$ul = Tag::ul();

foreach ($app as $key => $value){
    Tag::li()->appendTo($ul)->appendBody($key . ' ' .$value);
}

echo $ul;
echo Tag::input();