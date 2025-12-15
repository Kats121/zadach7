<?php
namespace MyApp\Notifications;
class EmailNotification extends AbstractNotification
{
    private string $type = 'Email';

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