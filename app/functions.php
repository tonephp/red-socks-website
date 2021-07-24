<?php

function doc($file) {
    $fileContent = file_get_contents(APP . $file);
    $fileContent = str_replace('<', '&lt;', $fileContent);
    $fileContent = str_replace('>', '&gt;', $fileContent);
    $fileContent = str_replace('?', '&#63;', $fileContent);
    
    return $fileContent;
}