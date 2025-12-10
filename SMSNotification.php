<?php
require "SMSNotification.php";
class SMSNotification extends AbstractNotification
{
    private $type = 'SMS';

    public function send($message)
    {
        $this->status = 'sent';
        return "SMS отправлен с содержимым: {$message}";
    }

    public function getType()
    {
        return $this->type;
    }
}