<?php


namespace App\Classes;


use App\Interfaces\SenderInterface;

class EmailSender implements SenderInterface
{
    public function send($message)
    {
        return $message;
    }
}