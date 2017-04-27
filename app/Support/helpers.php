<?php

use Illuminate\Support\Str;

/**
 * Generate a URL friendly "slug" from a given string.
 *
 * @param  string $title
 * @param  string $separator
 *
 * @return string
 */
function str_slug($title, $separator = '-')
{
    $title = str_replace(
        ['ü', 'Ü', 'ö', 'Ö'],
        ['u', 'U', 'o', 'O'],
        $title
    );
    return Str::slug($title, $separator);
}