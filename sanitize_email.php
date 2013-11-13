<?php

/**
 * Email sanitation allowing unicode characters
 *
 * @param string $email
 * @return string
 */
function sanitize_email($email)
{
    return preg_replace('/[^\p{L}\d!#$%&\'*+-\/=?^_`{|}~@.\[\]]+/', '', $email);
}