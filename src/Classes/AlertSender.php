<?php


namespace App\Classes;


use App\Interfaces\SenderInterface;

class AlertSender
{
    private $sender;

    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }

    public function alert($message)
    {
       return $this->sender->send($message);
    }
}