<?php


function show($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function esc($str){
    return htmlspecialchars($str);
}
