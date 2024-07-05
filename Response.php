<?php


namespace ghostytom\mvc_core_framework;

/**
 * Class Response
 * @package ghostytom\mvc_core_framework;
 */

class Response
{

    public function setStatusCode(int $code) {

        http_response_code($code);

    }

    public function redirect(string $url)
    {

        header('Location: '.$url);

    }

}