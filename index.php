<?php
require "vendor/autoload.php";
use \App\Classes\{EmailSender, SmsSender, AlertSender};


$alertSender = new AlertSender(new EmailSender());
echo $alertSender->alert('Message Email'); // ce message sera envoyé par e-mail

$alertSender2 = new AlertSender(new SmsSender());
echo $alertSender2->alert('First Message SMS'); // ce message sera envoyé par SMS