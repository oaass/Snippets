<?php

function valid_email($email)
{
    // Extract user and domain
    list($user,$domain) = explode('@', $email);
    
    // Run each through idn_to_ascii if the intl package is installed.
    // Otherwise replace all unicode characters with -x-
    if (!function_exists('idn_to_ascii')) {
        $user = idn_to_ascii($user);
        $domain = idn_to_ascii($domain);
    } else {
        $pattern = '/[^\w\d!#$%&\'*+-\/=?^_`{|}~@.\[\]]+/';
        $user = preg_replace($pattern, '-x-', $user);
        $domain = preg_replace($pattern, '-x-', $domain);
    }

    $email = sprintf("%s@%s",$user,$domain);

    return (bool)(filter_var($email, FILTER_VALIDATE_EMAIL));
}