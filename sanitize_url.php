<?php

/**
 * URL sanitation allowing unicode characters
 *
 * @param string $url
 * @return string
 */
function sanitize_url($url)
{
    return preg_replace('/[^\p{L}\d\$-_\.\+!\*\'\(\),{}\|\\\^~\[\]`<>#%";\/\?:@&=]+/u', '', $url);
}

echo sanitize_url('http://www.øl.no/£');