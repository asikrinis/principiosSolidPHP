<?php 
require_once __DIR__ . '/../services/NotificationService.php';

class Notification {
    private $service;
    public function __construct(NotificationService $service) {
        $this->service = $service;
    }

    public function send($message) {
        $this->service->send($message);
    }
}
?>