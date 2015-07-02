<?php
require_once __DIR__ . './classes/DB.php';
require_once __DIR__ . './models/news.php';

$db = new DB;

$items = $db -> query('SELECT * FROM news');

$news = new News();

$items = News::getAll();

include __DIR__ . '/view/index.php';

phpinfo();