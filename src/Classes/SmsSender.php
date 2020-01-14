<?php


namespace App\Classes;

use App\Interfaces\SenderInterface;

class SmsSender implements SenderInterface
{
    public function send($message)
    {
        return $message;
    }
}