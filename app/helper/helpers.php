<?php

use \Statickidz\GoogleTranslate;

function changLang($text)
{
    $source = 'bn';
    $target = 'en';

    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);

    return $result;
}

function setLang($lang)
{
    /*Session::set('variableName', $lang);

    echo Session::get('variableName');*/
}
