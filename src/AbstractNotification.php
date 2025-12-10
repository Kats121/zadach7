<?php
namespace MyApp\Notifications;
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




