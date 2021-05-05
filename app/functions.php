<?php

use app\widgets\translate\Translate;

function __($key = 'default') {
    return Translate::get($key);
}