<?php

if (!function_exists('getCacheExpirationTimeInSeconds')) {
    function getCacheExpirationTimeInSeconds(int $days): string
    {
        return $days * 24 * 60 * 60;
    }
}

if (!function_exists('gera_token')) {
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

if (!function_exists('saudacao')) {
    function saudacao($name)
    {
        date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil

        $hora = date('H');
        $nameReturn = explode(' ', $name);

        if ($hora >= 5 && $hora < 12) {
            return "Bom dia {$nameReturn[0]}!";
        } elseif ($hora >= 12 && $hora < 18) {
            return "Boa tarde {$nameReturn[0]}!";
        } else {
            return "Boa noite {$nameReturn[0]}!";
        }
    }
}


if (!function_exists('generateSlug')) {
    function generateSlug($segments = 4, $segmentLength = 4)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $slug = '';

        for ($i = 0; $i < $segments; $i++) {
            if ($i > 0) {
                $slug .= '-';
            }

            for ($j = 0; $j < $segmentLength; $j++) {
                $slug .= $characters[rand(0, strlen($characters) - 1)];
            }
        }

        return $slug;
    }
}
