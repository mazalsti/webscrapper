<?php
require 'simple_html_dom.php';

$info = file_get_html("https://dolarhoje.com/");
// echo $info;

$result = $info->find('#cotacao', 0)->innertext;
echo $result;
