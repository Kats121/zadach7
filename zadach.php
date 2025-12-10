<?php
interface Notification
{
    public function send($message);
    public function getStatus();
    public function getType();
}

abstract class AbstractNotification implements Notification
{
    protected $status;
    protected $timestamp;

    public function __construct()
    {
        $this->timestamp = time();
        $this->status = 'pending';
    }

    public function getStatus()
    {
        return $this->status;
    }

    abstract public function send($message);
    abstract public function getType();
}

class EmailNotification extends AbstractNotification
{
    private $type = 'Email';

    public function send($message)
    {
        $this->status = 'sent';
        return "Email отправлен с содержимым: {$message}";
    }

    public function getType()
    {
        return $this->type;
    }
}

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
?>

