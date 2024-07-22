<?php
if (!function_exists('gera_token')) {
    /**
     * The function "gera_token" generates a token using SHA-256 hashing algorithm with optional input
     * text or current timestamp.
     * 
     * @param text The `text` parameter in the `gera_token` function is optional. If a value is
     * provided for `text`, the function will generate a token based on the SHA-256 hash of the
     * provided text. If no value is provided for `text`, the function will generate a token based on
     * 
     * @return string The function `gera_token` returns a string that is a 60-character long base64
     * encoded token generated using SHA-256 hashing algorithm. If a text input is provided, the token
     * is generated based on the hash of the text. If no text is provided, the token is generated based
     * on the hash of the current timestamp.
     */
    function gera_token($text = false): string
    {
        if ($text) {
            $base64Token = substr(hash('sha256', $text), 0, 60);
        } else {
            $base64Token = substr(hash('sha256', time()), 0, 60);
        }
        return $base64Token;
    }
}
