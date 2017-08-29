<?php
if (!isset($path)) $path="";
function l($file) {
    global $path;
    $path=rtrim($path, "/");
    if ($path!="") return $path.'/'.$file;
    else           return $file;
}