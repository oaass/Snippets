<?php

/**
 * 
 * @param string $url
 * @return boolean
 */
function valid_url($url)
{
    // Make sure www. is present if no subdomain is provided
    extract(parse_url($url));
    if ((substr_count($host, '.') == 1) && (substr($host, 0, 4) != 'www.')) {
        $host = "www.{$host}";
    }
    $url = "{$scheme}://{$host}";

    // Use idn_to_ascii if the intl package is installed, otherwise replace unicode with -x-
    if (function_exists('idn_to_ascii')) {
        $url = idn_to_ascii($url);
    } else {
        $url = preg_replace('/[^\w\d\$-_\.\+!\*\'\(\),{}\|\\\^~\[\]`<>#%";\/\?:@&=]+/', '-x-', $url);
    }

    return (bool)filter_var($url, FILTER_VALIDATE_URL);
}