<?php


namespace ghostytom\mvc_core_framework\exception;


class NotFoundException extends \Exception
{

    protected $message = 'Page not found';
    protected $code = 404;

}